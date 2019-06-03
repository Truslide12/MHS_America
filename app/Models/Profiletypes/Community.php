<?php

namespace App\Models\Profiletypes;
use App\Models\Profile;

class Community implements ProfileTypeInterface {

	public function hasHomes(Profile $profile = null) { return true; }

	public function hasSpaces(Profile $profile = null) { return true; }

	public function isResidence(Profile $profile = null) { return true; }

	public function isIndividual(Profile $profile = null) { return false; }

	public function needsLicense(Profile $profile = null) { return false; }

	public function layout() { return 'profiles.community'; }

}