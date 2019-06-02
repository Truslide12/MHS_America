<?php

namespace ProfileTypes;
use Profile;

interface ProfileTypeInterface {

	public function hasHomes(Profile $profile = null);
	public function hasSpaces(Profile $profile = null);
	public function isResidence(Profile $profile = null);
	public function isIndividual(Profile $profile = null);
	public function needsLicense(Profile $profile = null);

	public function layout();

}