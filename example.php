<?php

/**
* This file is part of urlp-php
*
* https://github.com/paras/urlp-php
*
* urlp-php is free software: you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation, either version 3 of the License, or
* (at your option) any later version.
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.
*
* You should have received a copy of the GNU General Public License
* along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

require 'Urlp.php';

#
# IMPORTANT: Please add your API key to make the tests work
#
$ob_urlp = new Urlp('YOUR_API_KEY');

print_r('Shortening http://www.google.com results in an URL');
print_r($ob_urlp->shorten('http://www.google.com'));
