<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Controller\Controller;

class AppController extends Controller
{
    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->loadComponent('Authentication.Authentication');

        /*
         * Enable the following component for recommended CakePHP form protection settings.
         * see https://book.cakephp.org/4/en/controllers/components/form-protection.html
         */
        //$this->loadComponent('FormProtection');
    }

    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);

        // Load Settings for all views
        $this->loadModel('Settings');
        $settingsQuery = $this->Settings->find('all');
        $siteSettings = [];
        foreach ($settingsQuery as $setting) {
            $siteSettings[$setting->key] = $setting->value;
        }
        $this->set('siteSettings', $siteSettings);
    }
}
