<?php
/**
 * SAML 2.0 remote SP metadata for SimpleSAMLphp.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-sp-remote
 */
$metadata['workplace.example.com'] = array(
    'AssertionConsumerService' => 'https://workplace.example.com/saml/callback/workplace.example.com',
    'SingleLogoutService' => 'https://workplace.example.com/saml/callback/workplace.example.com?logoutendpoint=true',
);

$metadata['site1.example.com'] = array(
    'AssertionConsumerService' => 'https://site1.example.com/saml/callback/site1.example.com',
    'SingleLogoutService' => 'https://site1.example.com/saml/callback/site1.example.com?logoutendpoint=true',
);

$metadata['site2.example.com'] = array(
    'AssertionConsumerService' => 'https://site2.example.com/saml/callback/site2.example.com',
    'SingleLogoutService' => 'https://site2.example.com/saml/callback/site2.example.com?logoutendpoint=true',
);
