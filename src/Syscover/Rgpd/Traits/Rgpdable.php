<?php namespace Syscover\Rgpd\Traits;

trait Rgpdable
{
    public function cookies()
    {
        return view('rgpd::cookies');
    }

    public function privacyPolicy()
    {
        return view('rgpd::privacy_policy');
    }

    public function termsConditions()
    {
        return view('rgpd::terms_conditions');
    }
}