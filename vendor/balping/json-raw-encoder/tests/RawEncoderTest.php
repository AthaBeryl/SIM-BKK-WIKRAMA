<?php

/*

Json Raw Encoder
Encode arrays to json with raw JS objects (eg. callbacks) in them
Copyright (C) 2018  Balázs Dura-Kovács

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.

*/

namespace Balping\JsonRaw\Tests;

use Balping\JsonRaw\Raw;
use Balping\JsonRaw\Encoder;
use PHPUnit\Framework\TestCase;


class RawEncoderTest extends TestCase {

	/** @test */
	public function callbacks_can_be_passed(){
		$array = [
			"a"	=> "string",
			"b"	=> 42,
			"callback"	=> new Raw(<<<'JS'
function(a){
	console.log(a);
}
JS
			)
		];

		$json = Encoder::encode($array);

		$this->assertEquals(<<<'JSON'
{"a":"string","b":42,"callback":function(a){
	console.log(a);
}}
JSON
		, $json);


	}

}