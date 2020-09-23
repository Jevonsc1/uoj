<?php
return array (
  'profile' => 
  array (
    'oj-name' => '元亘教育在线测评系统',
    'oj-name-short' => 'YOJ',
    'administrator' => 'root',
    'admin-email' => 'admin@local_uoj.ac',
    'QQ-group' => '',
    'ICP-license' => '',
  ),
  'database' => 
  array (
    'database' => 'app_uoj233',
    'username' => 'root',
    'password' => 'root',
    'host' => '127.0.0.1',
  ),
  'web' => 
  array (
    'domain' => NULL,
    'main' => 
    array (
      'protocol' => 'http',
      'host' => UOJContext::httpHost(),
      'port' => 80,
    ),
    'blog' => 
    array (
      'protocol' => 'http',
      'host' => UOJContext::httpHost(),
      'port' => 80,
    ),
  ),
  'security' => 
  array (
    'user' => 
    array (
      'client_salt' => '8YMpekucp3UPxs0QMHk32fCb34IMS10m',
    ),
    'cookie' => 
    array (
      'checksum_salt' => 
      array (
        0 => 'MwnJd7RtbWOnUPbQ',
        1 => 'DI5XpIAJdO0zQA8Q',
        2 => 'Mbw1cP4Syp25Voxd',
      ),
    ),
  ),
  'mail' => 
  array (
    'noreply' => 
    array (
      'username' => 'noreply@local_uoj.ac',
      'password' => '_mail_noreply_password_',
      'host' => 'smtp.local_uoj.ac',
      'secure' => 'tls',
      'port' => 587,
    ),
  ),
  'judger' => 
  array (
    'socket' => 
    array (
      'port' => '2333',
      'password' => 'dxzmDuB3Gbk8zpL7fF4j2fvSl0XoLF20',
    ),
  ),
  'switch' => 
  array (
    'web-analytics' => false,
    'blog-domain-mode' => 3,
  ),
);
