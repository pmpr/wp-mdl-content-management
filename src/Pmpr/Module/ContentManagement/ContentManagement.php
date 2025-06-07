<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             684470e8ef798             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ContentManagement; use Pmpr\Common\Foundation\Container\ModuleInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\ContentManagement\EditorialComment\EditorialComment; use Pmpr\Module\ContentManagement\Setting\Setting; class ContentManagement extends ModuleInitiator { const wqyqikwawaaumeeo = 'content_management'; const PREFIX = self::wqyqikwawaaumeeo . Constants::wassgkgmoyygyaya; public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __('Contact', PR__MDL__CONTACT); }, Constants::sguyaymiiiiewame => Setting::class]); } public function mameiwsayuyquoeq() { EditorialComment::symcgieuakksimmu(); } }
