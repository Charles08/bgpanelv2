<?php

/**
 * LICENSE:
 * This program is free software: you can redistribute it and/or modify
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
 *
 *
 * @package		Bright Game Panel V2
 * @version		0.1
 * @category	Systems Administration
 * @author		warhawk3407 <warhawk3407@gmail.com> @NOSPAM
 * @copyright	Copyleft 2015, Nikita Rousseau
 * @license		GNU General Public License version 3.0 (GPLv3)
 * @link		http://www.bgpanel.net/
 */

if ( !class_exists('BGP_Module')) {
	trigger_error('Module_Box -> BGP_Module is missing !');
}

/**
 * Box Module
 */

class BGP_Module_Box extends BGP_Module {

	function __construct( )	{

		// Call parent constructor
		parent::__construct( basename(__DIR__) );
	}

}

/**
 * Box Module
 * Page: View
 * Title: Box Summary
 */

class BGP_Module_Box_View extends BGP_Module_Box {

	function __construct( $page = '' )	{

		// Call parent constructor
		parent::__construct( );

		self::setModulePageTitle( $page );
	}
}

/**
 * Box Module
 * Page: Add
 * Title: Box Add
 */

class BGP_Module_Box_Add extends BGP_Module_Box {

	function __construct( $page = '' )	{

		// Call parent constructor
		parent::__construct( );

		self::setModulePageTitle( $page );
	}
}

/**
 * Box Module
 * Page: Edit
 * Title: Box Edition
 */

class BGP_Module_Box_Edit extends BGP_Module_Box {

	function __construct( $page = '' )	{

		// Call parent constructor
		parent::__construct( );

		self::setModulePageTitle( $page );
	}
}
