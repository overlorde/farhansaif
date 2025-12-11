<?php
/**
 * Projects / Recent works data
 * Add or remove projects to update the projects section
 * Set 'link' to null if no link available
 */

return [
    'title' => 'Recent works',
    'section_id' => 'section1',
    'projects' => [
        [
            'title' => 'Python RR and MVE(Under development)',
            'description' => 'Can we apply the same techniques for existing record-replay and multi-version execution systems in case of free threading python without the global interpreter lock? This is a research question under investigation where we have to apply compiler engineering concepts in the source level and graduallly dive deep into the lower levels of python virtual machine.',
            'link' => null,
        ],
        [
            'title' => 'Clox',
            'description' => 'Lox language interpreter. Stack based virtual machine with custom IR.',
            'link' => 'https://github.com/overlorde/clox',
        ],
        [
            'title' => 'Jlox',
            'description' => 'Lox language interpreter based on JVM.',
            'link' => 'https://github.com/overlorde/jlox',
        ],
    ],
];
