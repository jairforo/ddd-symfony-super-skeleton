<?php

namespace SuperSkeleton\Advertiser\Domain;

class Advertiser
{
    public function __construct(
        private ?int $id,
        private string $name,
        private string $email,
        private string $password
    )
    {
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Advertiser
     */
    public function setId(int $id): Advertiser
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Advertiser
     */
    public function setName(string $name): Advertiser
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return Advertiser
     */
    public function setEmail(string $email): Advertiser
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return Advertiser
     */
    public function setPassword(string $password): Advertiser
    {
        $this->password = $password;
        return $this;
    }
}