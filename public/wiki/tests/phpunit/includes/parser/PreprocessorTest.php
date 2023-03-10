<?php

class PreprocessorTest extends MediaWikiTestCase {
	protected $mTitle = 'Page title';
	protected $mPPNodeCount = 0;
	/**
	 * @var ParserOptions
	 */
	protected $mOptions;
	/**
	 * @var Preprocessor
	 */
	protected $mPreprocessor;

	protected function setUp() {
		global $wgParserConf, $wgContLang;
		parent::setUp();
		$this->mOptions = ParserOptions::newFromUserAndLang( new User, $wgContLang );
		$name = isset( $wgParserConf['preprocessorClass'] ) ? $wgParserConf['preprocessorClass'] : 'Preprocessor_DOM';

		$this->mPreprocessor = new $name( $this );
	}

	function getStripList() {
		return array( 'gallery', 'display map' /* Used by Maps, see r80025 CR */, '/foo' );
	}

	public static function provideCases() {
		return array(
			array( "Foo", "<root>Foo</root>" ),
			array( "<!-- Foo -->", "<root><comment>&lt;!-- Foo --&gt;</comment></root>" ),
			array( "<!-- Foo --><!-- Bar -->", "<root><comment>&lt;!-- Foo --&gt;</comment><comment>&lt;!-- Bar --&gt;</comment></root>" ),
			array( "<!-- Foo -->  <!-- Bar -->", "<root><comment>&lt;!-- Foo --&gt;</comment>  <comment>&lt;!-- Bar --&gt;</comment></root>" ),
			array( "<!-- Foo --> \n <!-- Bar -->", "<root><comment>&lt;!-- Foo --&gt;</comment> \n <comment>&lt;!-- Bar --&gt;</comment></root>" ),
			array( "<!-- Foo --> \n <!-- Bar -->\n", "<root><comment>&lt;!-- Foo --&gt;</comment> \n<comment> &lt;!-- Bar --&gt;\n</comment></root>" ),
			array( "<!-- Foo -->  <!-- Bar -->\n", "<root><comment>&lt;!-- Foo --&gt;</comment>  <comment>&lt;!-- Bar --&gt;</comment>\n</root>" ),
			array( "<!-->Bar", "<root><comment>&lt;!--&gt;Bar</comment></root>" ),
			array( "<!-- Comment -- comment", "<root><comment>&lt;!-- Comment -- comment</comment></root>" ),
			array( "== Foo ==\n  <!-- Bar -->\n== Baz ==\n", "<root><h level=\"2\" i=\"1\">== Foo ==</h>\n<comment>  &lt;!-- Bar --&gt;\n</comment><h level=\"2\" i=\"2\">== Baz ==</h>\n</root>" ),
			array( "<gallery/>", "<root><ext><name>gallery</name><attr></attr></ext></root>" ),
			array( "Foo <gallery/> Bar", "<root>Foo <ext><name>gallery</name><attr></attr></ext> Bar</root>" ),
			array( "<gallery></gallery>", "<root><ext><name>gallery</name><attr></attr><inner></inner><close>&lt;/gallery&gt;</close></ext></root>" ),
			array( "<foo> <gallery></gallery>", "<root>&lt;foo&gt; <ext><name>gallery</name><attr></attr><inner></inner><close>&lt;/gallery&gt;</close></ext></root>" ),
			array( "<foo> <gallery><gallery></gallery>", "<root>&lt;foo&gt; <ext><name>gallery</name><attr></attr><inner>&lt;gallery&gt;</inner><close>&lt;/gallery&gt;</close></ext></root>" ),
			array( "<noinclude> Foo bar </noinclude>", "<root><ignore>&lt;noinclude&gt;</ignore> Foo bar <ignore>&lt;/noinclude&gt;</ignore></root>" ),
			array( "<noinclude>\n{{Foo}}\n</noinclude>", "<root><ignore>&lt;noinclude&gt;</ignore>\n<template lineStart=\"1\"><title>Foo</title></template>\n<ignore>&lt;/noinclude&gt;</ignore></root>" ),
			array( "<noinclude>\n{{Foo}}\n</noinclude>\n", "<root><ignore>&lt;noinclude&gt;</ignore>\n<template lineStart=\"1\"><title>Foo</title></template>\n<ignore>&lt;/noinclude&gt;</ignore>\n</root>" ),
			array( "<gallery>foo bar", "<root><ext><name>gallery</name><attr></attr><inner>foo bar</inner></ext></root>" ),
			array( "<{{foo}}>", "<root>&lt;<template><title>foo</title></template>&gt;</root>" ),
			array( "<{{{foo}}}>", "<root>&lt;<tplarg><title>foo</title></tplarg>&gt;</root>" ),
			array( "<gallery></gallery</gallery>", "<root><ext><name>gallery</name><attr></attr><inner>&lt;/gallery</inner><close>&lt;/gallery&gt;</close></ext></root>" ),
			array( "=== Foo === ", "<root><h level=\"3\" i=\"1\">=== Foo === </h></root>" ),
			array( "==<!-- -->= Foo === ", "<root><h level=\"2\" i=\"1\">==<comment>&lt;!-- --&gt;</comment>= Foo === </h></root>" ),
			array( "=== Foo ==<!-- -->= ", "<root><h level=\"1\" i=\"1\">=== Foo ==<comment>&lt;!-- --&gt;</comment>= </h></root>" ),
			array( "=== Foo ===<!-- -->\n", "<root><h level=\"3\" i=\"1\">=== Foo ===<comment>&lt;!-- --&gt;</comment></h>\n</root>" ),
			array( "=== Foo ===<!-- --> <!-- -->\n", "<root><h level=\"3\" i=\"1\">=== Foo ===<comment>&lt;!-- --&gt;</comment> <comment>&lt;!-- --&gt;</comment></h>\n</root>" ),
			array( "== Foo ==\n== Bar == \n", "<root><h level=\"2\" i=\"1\">== Foo ==</h>\n<h level=\"2\" i=\"2\">== Bar == </h>\n</root>" ),
			array( "===========", "<root><h level=\"5\" i=\"1\">===========</h></root>" ),
			array( "Foo\n=\n==\n=\n", "<root>Foo\n=\n==\n=\n</root>" ),
			array( "{{Foo}}", "<root><template><title>Foo</title></template></root>" ),
			array( "\n{{Foo}}", "<root>\n<template lineStart=\"1\"><title>Foo</title></template></root>" ),
			array( "{{Foo|bar}}", "<root><template><title>Foo</title><part><name index=\"1\" /><value>bar</value></part></template></root>" ),
			array( "{{Foo|bar}}a", "<root><template><title>Foo</title><part><name index=\"1\" /><value>bar</value></part></template>a</root>" ),
			array( "{{Foo|bar|baz}}", "<root><template><title>Foo</title><part><name index=\"1\" /><value>bar</value></part><part><name index=\"2\" /><value>baz</value></part></template></root>" ),
			array( "{{Foo|1=bar}}", "<root><template><title>Foo</title><part><name>1</name>=<value>bar</value></part></template></root>" ),
			array( "{{Foo|=bar}}", "<root><template><title>Foo</title><part><name></name>=<value>bar</value></part></template></root>" ),
			array( "{{Foo|bar=baz}}", "<root><template><title>Foo</title><part><name>bar</name>=<value>baz</value></part></template></root>" ),
			array( "{{Foo|{{bar}}=baz}}", "<root><template><title>Foo</title><part><name><template><title>bar</title></template></name>=<value>baz</value></part></template></root>" ),
			array( "{{Foo|1=bar|baz}}", "<root><template><title>Foo</title><part><name>1</name>=<value>bar</value></part><part><name index=\"1\" /><value>baz</value></part></template></root>" ),
			array( "{{Foo|1=bar|2=baz}}", "<root><template><title>Foo</title><part><name>1</name>=<value>bar</value></part><part><name>2</name>=<value>baz</value></part></template></root>" ),
			array( "{{Foo|bar|foo=baz}}", "<root><template><title>Foo</title><part><name index=\"1\" /><value>bar</value></part><part><name>foo</name>=<value>baz</value></part></template></root>" ),
			array( "{{{1}}}", "<root><tplarg><title>1</title></tplarg></root>" ),
			array( "{{{1|}}}", "<root><tplarg><title>1</title><part><name index=\"1\" /><value></value></part></tplarg></root>" ),
			array( "{{{Foo}}}", "<root><tplarg><title>Foo</title></tplarg></root>" ),
			array( "{{{Foo|}}}", "<root><tplarg><title>Foo</title><part><name index=\"1\" /><value></value></part></tplarg></root>" ),
			array( "{{{Foo|bar|baz}}}", "<root><tplarg><title>Foo</title><part><name index=\"1\" /><value>bar</value></part><part><name index=\"2\" /><value>baz</value></part></tplarg></root>" ),
			array( "{<!-- -->{Foo}}", "<root>{<comment>&lt;!-- --&gt;</comment>{Foo}}</root>" ),
			array( "{{{{Foobar}}}}", "<root>{<tplarg><title>Foobar</title></tplarg>}</root>" ),
			array( "{{{ {{Foo}} }}}", "<root><tplarg><title> <template><title>Foo</title></template> </title></tplarg></root>" ),
			array( "{{ {{{Foo}}} }}", "<root><template><title> <tplarg><title>Foo</title></tplarg> </title></template></root>" ),
			array( "{{{{{Foo}}}}}", "<root><template><title><tplarg><title>Foo</title></tplarg></title></template></root>" ),
			array( "{{{{{Foo}} }}}", "<root><tplarg><title><template><title>Foo</title></template> </title></tplarg></root>" ),
			array( "{{{{{{Foo}}}}}}", "<root><tplarg><title><tplarg><title>Foo</title></tplarg></title></tplarg></root>" ),
			array( "{{{{{{Foo}}}}}", "<root>{<template><title><tplarg><title>Foo</title></tplarg></title></template></root>" ),
			array( "[[[Foo]]", "<root>[[[Foo]]</root>" ),
			array( "{{Foo|[[[[bar]]|baz]]}}", "<root><template><title>Foo</title><part><name index=\"1\" /><value>[[[[bar]]|baz]]</value></part></template></root>" ), // This test is important, since it means the difference between having the [[ rule stacked or not
			array( "{{Foo|[[[[bar]|baz]]}}", "<root>{{Foo|[[[[bar]|baz]]}}</root>" ),
			array( "{{Foo|Foo [[[[bar]|baz]]}}", "<root>{{Foo|Foo [[[[bar]|baz]]}}</root>" ),
			array( "Foo <display map>Bar</display map             >Baz", "<root>Foo <ext><name>display map</name><attr></attr><inner>Bar</inner><close>&lt;/display map             &gt;</close></ext>Baz</root>" ),
			array( "Foo <display map foo>Bar</display map             >Baz", "<root>Foo <ext><name>display map</name><attr> foo</attr><inner>Bar</inner><close>&lt;/display map             &gt;</close></ext>Baz</root>" ),
			array( "Foo <gallery bar=\"baz\" />", "<root>Foo <ext><name>gallery</name><attr> bar=&quot;baz&quot; </attr></ext></root>" ),
			array( "Foo <gallery bar=\"1\" baz=2 />", "<root>Foo <ext><name>gallery</name><attr> bar=&quot;1&quot; baz=2 </attr></ext></root>" ),
			array( "</foo>Foo<//foo>", "<root><ext><name>/foo</name><attr></attr><inner>Foo</inner><close>&lt;//foo&gt;</close></ext></root>" ), # Worth blacklisting IMHO
			array( "{{#ifexpr: ({{{1|1}}} = 2) | Foo | Bar }}", "<root><template><title>#ifexpr: (<tplarg><title>1</title><part><name index=\"1\" /><value>1</value></part></tplarg> = 2) </title><part><name index=\"1\" /><value> Foo </value></part><part><name index=\"2\" /><value> Bar </value></part></template></root>" ),
			array( "{{#if: {{{1|}}} | Foo | {{Bar}} }}", "<root><template><title>#if: <tplarg><title>1</title><part><name index=\"1\" /><value></value></part></tplarg> </title><part><name index=\"1\" /><value> Foo </value></part><part><name index=\"2\" /><value> <template><title>Bar</title></template> </value></part></template></root>" ),
			array( "{{#if: {{{1|}}} | Foo | [[Bar]] }}", "<root><template><title>#if: <tplarg><title>1</title><part><name index=\"1\" /><value></value></part></tplarg> </title><part><name index=\"1\" /><value> Foo </value></part><part><name index=\"2\" /><value> [[Bar]] </value></part></template></root>" ),
			array( "{{#if: {{{1|}}} | [[Foo]] | Bar }}", "<root><template><title>#if: <tplarg><title>1</title><part><name index=\"1\" /><value></value></part></tplarg> </title><part><name index=\"1\" /><value> [[Foo]] </value></part><part><name index=\"2\" /><value> Bar </value></part></template></root>" ),
			array( "{{#if: {{{1|}}} | 1 | {{#if: {{{1|}}} | 2 | 3 }} }}", "<root><template><title>#if: <tplarg><title>1</title><part><name index=\"1\" /><value></value></part></tplarg> </title><part><name index=\"1\" /><value> 1 </value></part><part><name index=\"2\" /><value> <template><title>#if: <tplarg><title>1</title><part><name index=\"1\" /><value></value></part></tplarg> </title><part><name index=\"1\" /><value> 2 </value></part><part><name index=\"2\" /><value> 3 </value></part></template> </value></part></template></root>" ),
			array( "{{ {{Foo}}", "<root>{{ <template><title>Foo</title></template></root>" ),
			array( "{{Foobar {{Foo}} {{Bar}} {{Baz}} ", "<root>{{Foobar <template><title>Foo</title></template> <template><title>Bar</title></template> <template><title>Baz</title></template> </root>" ),
			array( "[[Foo]] |", "<root>[[Foo]] |</root>" ),
			array( "{{Foo|Bar|", "<root>{{Foo|Bar|</root>" ),
			array( "[[Foo]", "<root>[[Foo]</root>" ),
			array( "[[Foo|Bar]", "<root>[[Foo|Bar]</root>" ),
			array( "{{Foo| [[Bar] }}", "<root>{{Foo| [[Bar] }}</root>" ),
			array( "{{Foo| [[Bar|Baz] }}", "<root>{{Foo| [[Bar|Baz] }}</root>" ),
			array( "{{Foo|bar=[[baz]}}", "<root>{{Foo|bar=[[baz]}}</root>" ),
			array( "{{foo|", "<root>{{foo|</root>" ),
			array( "{{foo|}", "<root>{{foo|}</root>" ),
			array( "{{foo|} }}", "<root><template><title>foo</title><part><name index=\"1\" /><value>} </value></part></template></root>" ),
			array( "{{foo|bar=|}", "<root>{{foo|bar=|}</root>" ),
			array( "{{Foo|} Bar=", "<root>{{Foo|} Bar=</root>" ),
			array( "{{Foo|} Bar=}}", "<root><template><title>Foo</title><part><name>} Bar</name>=<value></value></part></template></root>" ),
			/* array( file_get_contents( __DIR__ . '/QuoteQuran.txt' ), file_get_contents( __DIR__ . '/QuoteQuranExpanded.txt' ) ), */
		);
	}

	/**
	 * Get XML preprocessor tree from the preprocessor (which may not be the
	 * native XML-based one).
	 *
	 * @param string $wikiText
	 * @return string
	 */
	protected function preprocessToXml( $wikiText ) {
		if ( method_exists( $this->mPreprocessor, 'preprocessToXml' ) ) {
			return $this->normalizeXml( $this->mPreprocessor->preprocessToXml( $wikiText ) );
		}

		$dom = $this->mPreprocessor->preprocessToObj( $wikiText );
		if ( is_callable( array( $dom, 'saveXML' ) ) ) {
			return $dom->saveXML();
		} else {
			return $this->normalizeXml( $dom->__toString() );
		}
	}

	/**
	 * Normalize XML string to the form that a DOMDocument saves out.
	 *
	 * @param string $xml
	 * @return string
	 */
	protected function normalizeXml( $xml ) {
		return preg_replace( '!<([a-z]+)/>!', '<$1></$1>', str_replace( ' />', '/>', $xml ) );
	}

	/**
	 * @dataProvider provideCases
	 * @covers Preprocessor_DOM::preprocessToXml
	 */
	public function testPreprocessorOutput( $wikiText, $expectedXml ) {
		$this->assertEquals( $this->normalizeXml( $expectedXml ), $this->preprocessToXml( $wikiText ) );
	}

	/**
	 * These are more complex test cases taken out of wiki articles.
	 */
	public static function provideFiles() {
		return array(
			array( "QuoteQuran" ), # http://en.wikipedia.org/w/index.php?title=Template:QuoteQuran/sandbox&oldid=237348988 GFDL + CC-BY-SA by Striver
			array( "Factorial" ), # http://en.wikipedia.org/w/index.php?title=Template:Factorial&oldid=98548758 GFDL + CC-BY-SA by Polonium
			array( "All_system_messages" ), # http://tl.wiktionary.org/w/index.php?title=Suleras:All_system_messages&oldid=2765 GPL text generated by MediaWiki
			array( "Fundraising" ), # http://tl.wiktionary.org/w/index.php?title=MediaWiki:Sitenotice&oldid=5716 GFDL + CC-BY-SA, copied there by Sky Harbor.
			array( "NestedTemplates" ), # bug 27936
		);
	}

	/**
	 * @dataProvider provideFiles
	 * @covers Preprocessor_DOM::preprocessToXml
	 */
	public function testPreprocessorOutputFiles( $filename ) {
		$folder = __DIR__ . "/../../../parser/preprocess";
		$wikiText = file_get_contents( "$folder/$filename.txt" );
		$output = $this->preprocessToXml( $wikiText );

		$expectedFilename = "$folder/$filename.expected";
		if ( file_exists( $expectedFilename ) ) {
			$expectedXml = $this->normalizeXml( file_get_contents( $expectedFilename ) );
			$this->assertEquals( $expectedXml, $output );
		} else {
			$tempFilename = tempnam( $folder, "$filename." );
			file_put_contents( $tempFilename, $output );
			$this->markTestIncomplete( "File $expectedFilename missing. Output stored as $tempFilename" );
		}
	}

	/**
	 * Tests from Bug 28642 ?? https://bugzilla.wikimedia.org/28642
	 */
	public static function provideHeadings() {
		return array( /* These should become headings: */
			array( "== h ==<!--c1-->", "<root><h level=\"2\" i=\"1\">== h ==<comment>&lt;!--c1--&gt;</comment></h></root>" ),
			array( "== h == 	<!--c1-->", "<root><h level=\"2\" i=\"1\">== h == 	<comment>&lt;!--c1--&gt;</comment></h></root>" ),
			array( "== h ==<!--c1--> 	", "<root><h level=\"2\" i=\"1\">== h ==<comment>&lt;!--c1--&gt;</comment> 	</h></root>" ),
			array( "== h == 	<!--c1--> 	", "<root><h level=\"2\" i=\"1\">== h == 	<comment>&lt;!--c1--&gt;</comment> 	</h></root>" ),
			array( "== h ==<!--c1--><!--c2-->", "<root><h level=\"2\" i=\"1\">== h ==<comment>&lt;!--c1--&gt;</comment><comment>&lt;!--c2--&gt;</comment></h></root>" ),
			array( "== h == 	<!--c1--><!--c2-->", "<root><h level=\"2\" i=\"1\">== h == 	<comment>&lt;!--c1--&gt;</comment><comment>&lt;!--c2--&gt;</comment></h></root>" ),
			array( "== h ==<!--c1--><!--c2--> 	", "<root><h level=\"2\" i=\"1\">== h ==<comment>&lt;!--c1--&gt;</comment><comment>&lt;!--c2--&gt;</comment> 	</h></root>" ),
			array( "== h == 	<!--c1--><!--c2--> 	", "<root><h level=\"2\" i=\"1\">== h == 	<comment>&lt;!--c1--&gt;</comment><comment>&lt;!--c2--&gt;</comment> 	</h></root>" ),
			array( "== h == 	<!--c1-->  <!--c2-->", "<root><h level=\"2\" i=\"1\">== h == 	<comment>&lt;!--c1--&gt;</comment>  <comment>&lt;!--c2--&gt;</comment></h></root>" ),
			array( "== h ==<!--c1-->  <!--c2--> 	", "<root><h level=\"2\" i=\"1\">== h ==<comment>&lt;!--c1--&gt;</comment>  <comment>&lt;!--c2--&gt;</comment> 	</h></root>" ),
			array( "== h == 	<!--c1-->  <!--c2--> 	", "<root><h level=\"2\" i=\"1\">== h == 	<comment>&lt;!--c1--&gt;</comment>  <comment>&lt;!--c2--&gt;</comment> 	</h></root>" ),
			array( "== h ==<!--c1--><!--c2--><!--c3-->", "<root><h level=\"2\" i=\"1\">== h ==<comment>&lt;!--c1--&gt;</comment><comment>&lt;!--c2--&gt;</comment><comment>&lt;!--c3--&gt;</comment></h></root>" ),
			array( "== h ==<!--c1-->  <!--c2--><!--c3-->", "<root><h level=\"2\" i=\"1\">== h ==<comment>&lt;!--c1--&gt;</comment>  <comment>&lt;!--c2--&gt;</comment><comment>&lt;!--c3--&gt;</comment></h></root>" ),
			array( "== h ==<!--c1--><!--c2-->  <!--c3-->", "<root><h level=\"2\" i=\"1\">== h ==<comment>&lt;!--c1--&gt;</comment><comment>&lt;!--c2--&gt;</comment>  <comment>&lt;!--c3--&gt;</comment></h></root>" ),
			array( "== h ==<!--c1-->  <!--c2-->  <!--c3-->", "<root><h level=\"2\" i=\"1\">== h ==<comment>&lt;!--c1--&gt;</comment>  <comment>&lt;!--c2--&gt;</comment>  <comment>&lt;!--c3--&gt;</comment></h></root>" ),
			array( "== h ==  <!--c1--><!--c2--><!--c3-->", "<root><h level=\"2\" i=\"1\">== h ==  <comment>&lt;!--c1--&gt;</comment><comment>&lt;!--c2--&gt;</comment><comment>&lt;!--c3--&gt;</comment></h></root>" ),
			array( "== h ==  <!--c1-->  <!--c2--><!--c3-->", "<root><h level=\"2\" i=\"1\">== h ==  <comment>&lt;!--c1--&gt;</comment>  <comment>&lt;!--c2--&gt;</comment><comment>&lt;!--c3--&gt;</comment></h></root>" ),
			array( "== h ==  <!--c1--><!--c2-->  <!--c3-->", "<root><h level=\"2\" i=\"1\">== h ==  <comment>&lt;!--c1--&gt;</comment><comment>&lt;!--c2--&gt;</comment>  <comment>&lt;!--c3--&gt;</comment></h></root>" ),
			array( "== h ==  <!--c1-->  <!--c2-->  <!--c3-->", "<root><h level=\"2\" i=\"1\">== h ==  <comment>&lt;!--c1--&gt;</comment>  <comment>&lt;!--c2--&gt;</comment>  <comment>&lt;!--c3--&gt;</comment></h></root>" ),
			array( "== h ==<!--c1--><!--c2--><!--c3-->  ", "<root><h level=\"2\" i=\"1\">== h ==<comment>&lt;!--c1--&gt;</comment><comment>&lt;!--c2--&gt;</comment><comment>&lt;!--c3--&gt;</comment>  </h></root>" ),
			array( "== h ==<!--c1-->  <!--c2--><!--c3-->  ", "<root><h level=\"2\" i=\"1\">== h ==<comment>&lt;!--c1--&gt;</comment>  <comment>&lt;!--c2--&gt;</comment><comment>&lt;!--c3--&gt;</comment>  </h></root>" ),
			array( "== h ==<!--c1--><!--c2-->  <!--c3-->  ", "<root><h level=\"2\" i=\"1\">== h ==<comment>&lt;!--c1--&gt;</comment><comment>&lt;!--c2--&gt;</comment>  <comment>&lt;!--c3--&gt;</comment>  </h></root>" ),
			array( "== h ==<!--c1-->  <!--c2-->  <!--c3-->  ", "<root><h level=\"2\" i=\"1\">== h ==<comment>&lt;!--c1--&gt;</comment>  <comment>&lt;!--c2--&gt;</comment>  <comment>&lt;!--c3--&gt;</comment>  </h></root>" ),
			array( "== h ==  <!--c1--><!--c2--><!--c3-->  ", "<root><h level=\"2\" i=\"1\">== h ==  <comment>&lt;!--c1--&gt;</comment><comment>&lt;!--c2--&gt;</comment><comment>&lt;!--c3--&gt;</comment>  </h></root>" ),
			array( "== h ==  <!--c1-->  <!--c2--><!--c3-->  ", "<root><h level=\"2\" i=\"1\">== h ==  <comment>&lt;!--c1--&gt;</comment>  <comment>&lt;!--c2--&gt;</comment><comment>&lt;!--c3--&gt;</comment>  </h></root>" ),
			array( "== h ==  <!--c1--><!--c2-->  <!--c3-->  ", "<root><h level=\"2\" i=\"1\">== h ==  <comment>&lt;!--c1--&gt;</comment><comment>&lt;!--c2--&gt;</comment>  <comment>&lt;!--c3--&gt;</comment>  </h></root>" ),
			array( "== h ==  <!--c1-->  <!--c2-->  <!--c3-->  ", "<root><h level=\"2\" i=\"1\">== h ==  <comment>&lt;!--c1--&gt;</comment>  <comment>&lt;!--c2--&gt;</comment>  <comment>&lt;!--c3--&gt;</comment>  </h></root>" ),
			array( "== h ==<!--c1--> 	<!--c2-->", "<root><h level=\"2\" i=\"1\">== h ==<comment>&lt;!--c1--&gt;</comment> 	<comment>&lt;!--c2--&gt;</comment></h></root>" ),
			array( "== h == 	<!--c1--> 	<!--c2-->", "<root><h level=\"2\" i=\"1\">== h == 	<comment>&lt;!--c1--&gt;</comment> 	<comment>&lt;!--c2--&gt;</comment></h></root>" ),
			array( "== h ==<!--c1--> 	<!--c2--> 	", "<root><h level=\"2\" i=\"1\">== h ==<comment>&lt;!--c1--&gt;</comment> 	<comment>&lt;!--c2--&gt;</comment> 	</h></root>" ),

			/* These are not working: */
			array( "== h == x <!--c1--><!--c2--><!--c3-->  ", "<root>== h == x <comment>&lt;!--c1--&gt;</comment><comment>&lt;!--c2--&gt;</comment><comment>&lt;!--c3--&gt;</comment>  </root>" ),
			array( "== h ==<!--c1--> x <!--c2--><!--c3-->  ", "<root>== h ==<comment>&lt;!--c1--&gt;</comment> x <comment>&lt;!--c2--&gt;</comment><comment>&lt;!--c3--&gt;</comment>  </root>" ),
			array( "== h ==<!--c1--><!--c2--><!--c3--> x ", "<root>== h ==<comment>&lt;!--c1--&gt;</comment><comment>&lt;!--c2--&gt;</comment><comment>&lt;!--c3--&gt;</comment> x </root>" ),
		);
	}

	/**
	 * @dataProvider provideHeadings
	 * @covers Preprocessor_DOM::preprocessToXml
	 */
	public function testHeadings( $wikiText, $expectedXml ) {
		$this->assertEquals( $this->normalizeXml( $expectedXml ), $this->preprocessToXml( $wikiText ) );
	}
}
