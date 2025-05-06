<x-emails.components.layout title="Welcome to Our Platform!">

    <p>Hello {{ $name }},</p>

    <x-emails.components.message type="success" text="Your account has been successfully created!" />

    <p>Start exploring our services today. Click below to get started:</p>

    <x-emails.components.button url="{{ $actionUrl }}" text="Get Started" />

    <p>If you didn’t create this account, please ignore this email or contact support.</p>

  </x-emails.components.layout>
