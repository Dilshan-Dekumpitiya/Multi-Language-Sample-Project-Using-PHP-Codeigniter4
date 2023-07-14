<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Language extends BaseController
{
    public function index()
    {
        $session = session(); // Creating session service instance variable.
        $locale = $this->request->getLocale(); // Reading requested locale and storing into $locale variable.
        $session->remove('lang'); // Removing existing saved locale “lang” key from session
        $session->set('lang', $locale); // Saving requested locale into “lang” session key
        $url = base_url(); // Getting application base URL
        return redirect()->to($url); // Redirecting to base URL
    }
}