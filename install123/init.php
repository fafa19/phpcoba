<?php
/*
* 2007-2012 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2012 PrestaShop SA
*  @version  Release: $Revision: 15677 $
*  @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

// Check PHP version
if (version_compare(PHP_VERSION, '5.1.3', '<'))
	die('You need at least PHP 5.1.3 to run PrestaShop. Your current PHP version is '.PHP_VERSION);

// Generate common constants
define('PS_INSTALLATION_IN_PROGRESS', true);
define('_PS_INSTALL_PATH_', dirname(__FILE__).'/');
define('_PS_INSTALL_DATA_PATH_', _PS_INSTALL_PATH_.'data/');
define('_PS_INSTALL_CONTROLLERS_PATH_', _PS_INSTALL_PATH_.'controllers/');
define('_PS_INSTALL_MODELS_PATH_', _PS_INSTALL_PATH_.'models/');
define('_PS_INSTALL_LANGS_PATH_', _PS_INSTALL_PATH_.'langs/');
define('_PS_INSTALL_FIXTURES_PATH_', _PS_INSTALL_PATH_.'fixtures/');

require_once(_PS_INSTALL_PATH_ . 'install_version.php');

// we check if theses constants are defined
// in order to use init.php in upgrade.php script
if (!defined('__PS_BASE_URI__'))
	define('__PS_BASE_URI__', substr($_SERVER['REQUEST_URI'], 0, -1 * (strlen($_SERVER['REQUEST_URI']) - strrpos($_SERVER['REQUEST_URI'], '/')) - strlen(substr(dirname($_SERVER['REQUEST_URI']), strrpos(dirname($_SERVER['REQUEST_URI']), '/') + 1))));

if (!defined('_THEME_NAME_'))
	define('_THEME_NAME_', 'default');

require_once(dirname(_PS_INSTALL_PATH_).'/config/defines.inc.php');
require_once(dirname(_PS_INSTALL_PATH_).'/config/defines_uri.inc.php');

// PrestaShop autoload is used to load some helpfull classes like Tools.
// Add classes used by installer bellow.
require_once(_PS_ROOT_DIR_.'/config/autoload.php');
require_once(_PS_ROOT_DIR_.'/config/alias.php');
require_once(_PS_INSTALL_PATH_.'classes/exception.php');
require_once(_PS_INSTALL_PATH_.'classes/languages.php');
require_once(_PS_INSTALL_PATH_.'classes/language.php');
require_once(_PS_INSTALL_PATH_.'classes/model.php');
require_once(_PS_INSTALL_PATH_.'classes/session.php');
require_once(_PS_INSTALL_PATH_.'classes/sqlLoader.php');
require_once(_PS_INSTALL_PATH_.'classes/xmlLoader.php');
require_once(_PS_INSTALL_PATH_.'classes/simplexml.php');

@set_time_limit(0);
if (!@ini_get('date.timezone'))
	@date_default_timezone_set('UTC');

// Try to improve memory limit if it's under 32M
if (Tools::getMemoryLimit() < Tools::getOctets('32M'))
	ini_set('memory_limit', '32M');