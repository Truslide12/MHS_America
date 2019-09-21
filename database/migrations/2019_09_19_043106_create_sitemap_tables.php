<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSitemapTables extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('sitemap_linkgroups', function($table) {
            $table->bigIncrements('id');
            $table->string('parent_group')->nullable(true);
            $table->float('priority', 1, 3)->nullable(true);
            $table->string('lastmod')->nullable(true);
            $table->string('changefreq')->nullable(true);
            $table->string('badge_color');
            $table->string('badge_bg');
            $table->string('badge_text');
            $table->string('name');
            $table->string('title');
            $table->string('description');
            $table->string('controller_function');
            $table->boolean('disabled');
            $table->timestamps();
            $table->softDeletes();
        });

        /********************************
        ** PRELOAD VALS FROM LOCAL DEV
        *********************************/
            $preload_linkgroups = array(
                /*real men start arrays at 1*/
                1  => ['priority'=> 0.8,            'lastmod'=> 'calculate',    'changefreq'=> 'monthly',
                       'badge_color'=>'#FFFFFF',    'badge_bg'=> '#FF5959',     'badge_text'=> 'STATIC PAGE',
                       'name'=>'static-pages',      'title'=> 'Static Pages',   'description'=>'Static pages scanned from the pages folder in views.',
                       'controller_function' => 'fetchStaticLinks',             'disabled' => false
                   ],
                2  => ['priority'=> 0.99,           'lastmod'=> 'calculate',    'changefreq'=> 'monthly',
                       'badge_color'=>'#000000',    'badge_bg'=> '#50ED67',     'badge_text'=> 'PROMO PAGE',
                       'name'=>'promo-pages',       'title'=> 'Promo Pages',    'description'=>'Promotional pages scanned from the as folder in views. Includes getstarted routes.',
                       'controller_function' => 'fetchPromoLinks',             'disabled' => false
                   ],
                3  => ['priority'=> 0.85,           'lastmod'=> 'calculate',    'changefreq'=> 'monthly',
                       'badge_color'=>'#FFFFFF',    'badge_bg'=> '#B448F4',     'badge_text'=> 'SEARCH PAGE',
                       'name'=>'search-pages',      'title'=> 'Search Pages',   'description'=>'Search pages scanned from the search folder in views.',
                       'controller_function' => 'fetchSearchLinks',             'disabled' => false
                   ],
                4  => ['priority'=> 0.85,           'lastmod'=> 'calculate',    'changefreq'=> 'monthly',
                       'badge_color'=>'#FFFFFF',    'badge_bg'=> '#F2A742',     'badge_text'=> 'PAID PROFILE',
                       'name'=>'paid-profiles',     'title'=> 'Paid Profiles',  'description'=>'Paid Profile pages.',
                       'controller_function' => 'fetchProfileLinks',            'disabled' => false
                   ],
                5  => ['priority'=> 1.0,            'lastmod'=> 'calculate',    'changefreq'=> 'daily',
                       'badge_color'=>'#FFFFFF',    'badge_bg'=> '#000000',     'badge_text'=> 'NATIONAL PAGE',
                       'name'=>'national-page',     'title'=> 'National Page',  'description'=>'Static pages scanned from the pages folder in views.',
                       'controller_function' => 'fetchNationalLink',            'disabled' => false
                   ],
                6  => ['priority'=> 0.85,           'lastmod'=> 'calculate',    'changefreq'=> 'daily',
                       'badge_color'=>'#FFFFFF',    'badge_bg'=> '#000080',     'badge_text'=> 'STATE PAGE',
                       'name'=>'state-pages',       'title'=> 'State Pages',    'description'=>'Static pages scanned from the pages folder in views.',
                       'controller_function' => 'fetchStateLinks',              'disabled' => false
                   ],
                7  => ['priority'=> 0.7,            'lastmod'=> 'calculate',    'changefreq'=> 'weekly',
                       'badge_color'=>'#FFFFFF',    'badge_bg'=> '#3737FF',     'badge_text'=> 'COUNTY PAGE',
                       'name'=>'county-pages',      'title'=> 'County Pages',   'description'=>'Static pages scanned from the pages folder in views.',
                       'controller_function' => 'fetchStateLinks',              'disabled' => false
                   ],
                8  => ['priority'=> 0.6,            'lastmod'=> 'calculate',    'changefreq'=> 'weekly',
                       'badge_color'=>'#000000',    'badge_bg'=> '#F2F2FF',     'badge_text'=> 'CITY PAGE',
                       'name'=>'city-pages',        'title'=> 'City Pages',     'description'=>'Static pages scanned from the pages folder in views.',
                       'controller_function' => 'fetchStateLinks',              'disabled' => false
                   ],
            );

            foreach ($preload_linkgroups as $idx => $vals) {
                DB::table('sitemap_linkgroups')->insert(array(
                    'id'                    => $idx,
                    'parent_group'          => ($idx > 4) ? 'explore' : 'static',
                    'priority'              => $vals['priority'],
                    'lastmod'               => $vals['lastmod'],
                    'changefreq'            => $vals['changefreq'],
                    'badge_color'           => $vals['badge_color'],
                    'badge_bg'              => $vals['badge_bg'],
                    'badge_text'            => $vals['badge_text'],
                    'name'                  => $vals['name'],
                    'title'                 => $vals['title'],
                    'description'           => $vals['description'],
                    'controller_function'   => $vals['controller_function'],
                    'disabled'              => $vals['disabled'],
                ));    
            }



        Schema::create('sitemap_proccessing_history', function($table) {
            $table->bigIncrements('id');
            $table->string('type');
            $table->string('file_name');
            $table->dateTime('date_ran');
            $table->float('gen_time');
            $table->bigInteger('link_count');
            $table->tinyInteger('children')->nullable(true);
            $table->bigInteger('file_size');
            $table->timestamps();
            $table->softDeletes();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sitemap_proccessing_history');
        Schema::dropIfExists('sitemap_linkgroups');
    }

}
