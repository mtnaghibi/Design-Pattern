<?php

namespace Pattern\Behavioral\TemplateMethod\Sample2;

/**
 * The Abstract Class defines the template method and declares all its steps.
 */
abstract class SocialNetwork
{
    protected string $username;

    protected string $password;

    public function __construct(string $username, string $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    /**
     * The actual template method calls abstract steps in a specific order. A
     * subclass may implement all of the steps, allowing this method to actually
     * post something to a social network.
     *
     * @param string $message
     *
     * @return bool
     */
    public function post(string $message): bool
    {
        // Authenticate before posting. Every network uses a different
        // authentication method.
        if ($this->logIn($this->username, $this->password)) {
            // Send the post data. All networks have different APIs.
            $result = $this->sendData($message);
            // ...
            $this->logOut();

            return $result;
        }

        return false;
    }

    /**
     * The steps are declared abstract to force the subclasses to implement them
     * all.
     *
     * @param string $userName
     * @param string $password
     *
     * @return bool
     */
    abstract public function logIn(string $userName, string $password): bool;

    abstract public function sendData(string $message): bool;

    abstract public function logOut(): void;
}