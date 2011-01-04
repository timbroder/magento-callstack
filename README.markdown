<!-- -*- markdown -*- -->

Instructions
====================
Call this from anywhere to get the function call stack and see where the current function you are in was called from

Mage::helper('stack/callstack')->toFirePhp();  
Mage::helper('stack/callstack')->toLog(); 

ex:

...&#47;app&#47;code&#47;community&#47;Timbroder&#47;Stack&#47;Helper&#47;Callstack.php line 16 calls get_callstack()  
...&#47;app&#47;design&#47;frontend&#47;mongoose&#47;default&#47;template&#47;catalog&#47;cms&#47;bikes_bmx.phtml line 12 calls toLog()  
...&#47;app&#47;design&#47;frontend&#47;mongoose&#47;default&#47;template&#47;catalog&#47;cms&#47;bikes.phtml line 21 calls require_once()  
...&#47;app&#47;code&#47;core&#47;Mage&#47;Core&#47;Block&#47;Template.php line 212 calls include()  
...&#47;app&#47;code&#47;core&#47;Mage&#47;Core&#47;Block&#47;Template.php line 239 calls fetchView()  
...&#47;app&#47;code&#47;core&#47;Mage&#47;Core&#47;Block&#47;Template.php line 253 calls renderView()  
...&#47;app&#47;code&#47;core&#47;Mage&#47;Core&#47;Block&#47;Abstract.php line 668 calls _toHtml()  
...&#47;app&#47;code&#47;core&#47;Mage&#47;Core&#47;Model&#47;Email&#47;Template&#47;Filter.php line 190 calls toHtml()  
...&#47;lib&#47;Varien&#47;Filter&#47;Template.php line 134 calls call_user_func()  
...&#47;app&#47;code&#47;core&#47;Mage&#47;Core&#47;Model&#47;Email&#47;Template&#47;Filter.php line 501 calls filter()  
...&#47;app&#47;code&#47;core&#47;Mage&#47;Cms&#47;Block&#47;Page.php line 100 calls filter()  
...&#47;app&#47;code&#47;core&#47;Mage&#47;Core&#47;Block&#47;Abstract.php line 668 calls _toHtml()  
...&#47;app&#47;code&#47;core&#47;Mage&#47;Core&#47;Block&#47;Abstract.php line 513 calls toHtml()  
...&#47;app&#47;code&#47;core&#47;Mage&#47;Core&#47;Block&#47;Abstract.php line 460 calls _getChildHtml()  
...&#47;app&#47;code&#47;local&#47;Mage&#47;Page&#47;Block&#47;Html&#47;Wrapper.php line 52 calls getChildHtml()  
...&#47;app&#47;code&#47;core&#47;Mage&#47;Core&#47;Block&#47;Abstract.php line 668 calls _toHtml()  
...&#47;app&#47;code&#47;core&#47;Mage&#47;Core&#47;Block&#47;Text&#47;List.php line 43 calls toHtml()  
...&#47;app&#47;code&#47;core&#47;Mage&#47;Core&#47;Block&#47;Abstract.php line 668 calls _toHtml()  
...&#47;app&#47;code&#47;core&#47;Mage&#47;Core&#47;Block&#47;Abstract.php line 513 calls toHtml()  
...&#47;app&#47;code&#47;core&#47;Mage&#47;Core&#47;Block&#47;Abstract.php line 464 calls _getChildHtml()  
...&#47;app&#47;design&#47;frontend&#47;mongoose&#47;default&#47;template&#47;page&#47;1column.phtml line 55 calls getChildHtml()  
...&#47;app&#47;code&#47;core&#47;Mage&#47;Core&#47;Block&#47;Template.php line 212 calls include()  
...&#47;app&#47;code&#47;core&#47;Mage&#47;Core&#47;Block&#47;Template.php line 239 calls fetchView()  
...&#47;app&#47;code&#47;core&#47;Mage&#47;Core&#47;Block&#47;Template.php line 253 calls renderView()  
...&#47;app&#47;code&#47;core&#47;Mage&#47;Core&#47;Block&#47;Abstract.php line 668 calls _toHtml()  
...&#47;app&#47;code&#47;core&#47;Mage&#47;Core&#47;Model&#47;Layout.php line 529 calls toHtml()  
...&#47;app&#47;code&#47;local&#47;Mage&#47;Core&#47;Controller&#47;Varien&#47;Action.php line 389 calls getOutput()  
...&#47;app&#47;code&#47;core&#47;Mage&#47;Cms&#47;Helper&#47;Page.php line 130 calls renderLayout()  
...&#47;app&#47;code&#47;core&#47;Mage&#47;Cms&#47;Helper&#47;Page.php line 52 calls _renderPage()  
...&#47;app&#47;code&#47;core&#47;Mage&#47;Cms&#47;controllers&#47;PageController.php line 45 calls renderPage()  
...&#47;app&#47;code&#47;local&#47;Mage&#47;Core&#47;Controller&#47;Varien&#47;Action.php line 418 calls viewAction()  
...&#47;app&#47;code&#47;core&#47;Mage&#47;Core&#47;Controller&#47;Varien&#47;Router&#47;Standard.php line 254 calls dispatch()  
...&#47;app&#47;code&#47;core&#47;Mage&#47;Core&#47;Controller&#47;Varien&#47;Front.php line 177 calls match()  
...&#47;app&#47;code&#47;core&#47;Mage&#47;Core&#47;Model&#47;App.php line 304 calls dispatch()  
...&#47;app&#47;Mage.php line 598 calls run()  
...&#47;index.php line 155 calls run()  