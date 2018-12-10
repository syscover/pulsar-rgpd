<?php namespace Syscover\Rgpd\Traits;

trait Rgpdable
{
    public function cookies()
    {
        return view('rgpd::content.cookies');
    }

    public function privacyPolicy()
    {
        return view('rgpd::content.privacy_policy');
    }

    public function termsConditions()
    {
        return view('rgpd::content.terms_conditions');
    }
}