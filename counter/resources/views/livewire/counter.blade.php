<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Your Title</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
    <div style="display: flex; flex-direction: column; justify-content: center; align-items: center; width: 100vw; height: 100vh; background: linear-gradient(135deg, #f6d365 0%, #fda085 100%); overflow: hidden;">
        <h1>{{ $count }}</h1>
        <button style="background-color: #3f51b5; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; margin-top: 20px;" wire:click="increment">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 5V19M5 12L19 12" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>
    </div>
</body>
</html>
