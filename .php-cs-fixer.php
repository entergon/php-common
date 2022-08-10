<?php

$finder = PhpCsFixer\Finder::create()
  ->exclude('storage')
  ->exclude('bootstrap/cache')
  ->exclude('vendor')
  ->in(__DIR__);

$config = new PhpCsFixer\Config();

return $config->setRules([
  '@PSR12' => true,
  '@Symfony' => true,
  'method_chaining_indentation' => true,
  'array_indentation' => true,
  'concat_space' => ['spacing' => 'one'],
])
  ->setFinder($finder)
  ->setLineEnding("\n")
  ->setIndent('  ');
