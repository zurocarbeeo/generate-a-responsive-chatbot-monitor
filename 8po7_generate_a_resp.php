<?php

// Configuration File for Responsive Chatbot Monitor

// Database Connection Settings
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'chatbot_monitor';

// Chatbot API Settings
$chatbot_api_url = 'https://api.chatbot.com/v1/conversations';
$chatbot_api_key = 'YOUR_API_KEY_HERE';
$chatbot_api_secret = 'YOUR_API_SECRET_HERE';

// Monitoring Settings
$monitor_interval = 10; // seconds
$max_conversations = 100;

// Responsive Web Interface Settings
$responsive_interface = true;
$min_screen_width = 320; // pixels
$max_screen_width = 1920; // pixels

// Chatbot Conversation Settings
$max_messages = 20;
$message_character_limit = 200;

// Alert Settings
>alert_email = 'alerts@example.com';
>error_reporting = E_ALL & ~E_NOTICE;

// Development Mode
$dev_mode = false;

// Debug Mode
$debug_mode = false;

// Error Log File
$error_log_file = 'error_log.txt';

?>