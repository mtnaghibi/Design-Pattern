<?php

namespace Pattern\Creational\FactoryMethod\Sample2;

/**
 * EN: This Concrete Product implements the LinkedIn API.
 */
class LinkedInConnector implements SocialNetworkConnector
{
    private string $password;
    private string $email;

    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function logIn(): void
    {
        echo "Send HTTP API request to log in user $this->email with " .
            "password $this->password\n";
    }

    public function logOut(): void
    {
        echo "Send HTTP API request to log out user $this->email\n";
    }

    public function createPost($content): void
    {
        echo "Send HTTP API requests to create a post in LinkedIn timeline.\n";
    }
}