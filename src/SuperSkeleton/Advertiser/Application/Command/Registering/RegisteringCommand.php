<?php declare(strict_types=1);

namespace SuperSkeleton\Advertiser\Application\Command\Registering;

use SuperSkeleton\Advertiser\Application\Command\Command;

class RegisteringCommand implements Command
{

    public function __construct(
        private string $name,
        private string $email,
        private string $password
    )
    {
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

}
