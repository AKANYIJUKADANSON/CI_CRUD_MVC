<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\StrictRules\CreditCardRules;
use CodeIgniter\Validation\StrictRules\FileRules;
use CodeIgniter\Validation\StrictRules\FormatRules;
use CodeIgniter\Validation\StrictRules\Rules;

class Validation extends BaseConfig
{
    // --------------------------------------------------------------------
    // Setup
    // --------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var list<string>
     */
    public array $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public array $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    // --------------------------------------------------------------------
    // Rules
    // --------------------------------------------------------------------

    public array $signup = [
        'username'     => 'required|max_length[5]',
        'password'     => 'required|max_length[255]',
        'pass_confirm' => 'required|max_length[255]|matches[password]',
        'email'        => 'required|max_length[254]|valid_email',
    ];

    public array $signup_errors = [
        'username' => [
            'required' => 'You must choose a username.',
            'max_length' => 'Supplied Value({value}) for {field} must have at least {param} characters'

        ],
        'email' => [
            'valid_email' => 'Please check the Email field. It does not appear to be valid.',
        ],
        'password'=> [
            'max_length'=> 'Rules.password.min_length',
        ],
    ];
}
