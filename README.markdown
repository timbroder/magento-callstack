<!-- -*- markdown -*- -->

Instructions
====================
Call this from anywhere to get the function call stack and see where the current function you are in was called from

Mage::helper('stack/callstack')->toFirePhp();

Mage::helper('stack/callstack')->toLog(); 

ex:

...\app\code\community\Timbroder\Stack\Helper\Callstack.php line 16 calls get_callstack()
...\app\design\frontend\mongoose\default\template\catalog\cms\bikes_bmx.phtml line 12 calls toLog()
...\app\design\frontend\mongoose\default\template\catalog\cms\bikes.phtml line 21 calls require_once()
...\app\code\core\Mage\Core\Block\Template.php line 212 calls include()
...\app\code\core\Mage\Core\Block\Template.php line 239 calls fetchView()
...\app\code\core\Mage\Core\Block\Template.php line 253 calls renderView()
...\app\code\core\Mage\Core\Block\Abstract.php line 668 calls _toHtml()
...\app\code\core\Mage\Core\Model\Email\Template\Filter.php line 190 calls toHtml()
...\lib\Varien\Filter\Template.php line 134 calls call_user_func()
...\app\code\core\Mage\Core\Model\Email\Template\Filter.php line 501 calls filter()
...\app\code\core\Mage\Cms\Block\Page.php line 100 calls filter()
...\app\code\core\Mage\Core\Block\Abstract.php line 668 calls _toHtml()
...\app\code\core\Mage\Core\Block\Abstract.php line 513 calls toHtml()
...\app\code\core\Mage\Core\Block\Abstract.php line 460 calls _getChildHtml()
...\app\code\local\Mage\Page\Block\Html\Wrapper.php line 52 calls getChildHtml()
...\app\code\core\Mage\Core\Block\Abstract.php line 668 calls _toHtml()
...\app\code\core\Mage\Core\Block\Text\List.php line 43 calls toHtml()
...\app\code\core\Mage\Core\Block\Abstract.php line 668 calls _toHtml()
...\app\code\core\Mage\Core\Block\Abstract.php line 513 calls toHtml()
...\app\code\core\Mage\Core\Block\Abstract.php line 464 calls _getChildHtml()
...\app\design\frontend\mongoose\default\template\page\1column.phtml line 55 calls getChildHtml()
...\app\code\core\Mage\Core\Block\Template.php line 212 calls include()
...\app\code\core\Mage\Core\Block\Template.php line 239 calls fetchView()
...\app\code\core\Mage\Core\Block\Template.php line 253 calls renderView()
...\app\code\core\Mage\Core\Block\Abstract.php line 668 calls _toHtml()
...\app\code\core\Mage\Core\Model\Layout.php line 529 calls toHtml()
...\app\code\local\Mage\Core\Controller\Varien\Action.php line 389 calls getOutput()
...\app\code\core\Mage\Cms\Helper\Page.php line 130 calls renderLayout()
...\app\code\core\Mage\Cms\Helper\Page.php line 52 calls _renderPage()
...\app\code\core\Mage\Cms\controllers\PageController.php line 45 calls renderPage()
...\app\code\local\Mage\Core\Controller\Varien\Action.php line 418 calls viewAction()
...\app\code\core\Mage\Core\Controller\Varien\Router\Standard.php line 254 calls dispatch()
...\app\code\core\Mage\Core\Controller\Varien\Front.php line 177 calls match()
...\app\code\core\Mage\Core\Model\App.php line 304 calls dispatch()
...\app\Mage.php line 598 calls run()
...\index.php line 155 calls run()