<?php

/**
 * Copyright (C) 2018 Spencer Mortensen
 *
 * This file is part of Html5.
 *
 * Html5 is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Html5 is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with Html5. If not, see <http://www.gnu.org/licenses/>.
 *
 * @author Spencer Mortensen <spencer@lens.guide>
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL-3.0
 * @copyright 2018 Spencer Mortensen
 */

namespace SpencerMortensen\Html5;

use SpencerMortensen\Html5\Elements\Html;

class Document implements Node
{
	/** @var string */
	private static $doctypeDeclaration = '<!DOCTYPE html>';

	/** @var Html */
	private $html;

	public function __construct(Html $html)
	{
		$this->html = $html;
	}

	public function __toString()
	{
		return self::$doctypeDeclaration . (string)$this->html;
	}
}
