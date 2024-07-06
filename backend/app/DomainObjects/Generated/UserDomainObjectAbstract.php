<?php

namespace HiEvents\DomainObjects\Generated;

/**
 * THIS FILE IS AUTOGENERATED - DO NOT EDIT IT DIRECTLY.
 * @package HiEvents\DomainObjects\Generated
 */
abstract class UserDomainObjectAbstract extends \HiEvents\DomainObjects\AbstractDomainObject
{
    final public const SINGULAR_NAME = 'user';
    final public const PLURAL_NAME = 'users';
    final public const ID = 'id';
    final public const EMAIL = 'email';
    final public const EMAIL_VERIFIED_AT = 'email_verified_at';
    final public const PASSWORD = 'password';
    final public const REMEMBER_TOKEN = 'remember_token';
    final public const CREATED_AT = 'created_at';
    final public const UPDATED_AT = 'updated_at';
    final public const DELETED_AT = 'deleted_at';
    final public const FIRST_NAME = 'first_name';
    final public const LAST_NAME = 'last_name';
    final public const PENDING_EMAIL = 'pending_email';
    final public const TIMEZONE = 'timezone';
    final public const LOCALE = 'locale';

    protected int $id;
    protected string $email;
    protected ?string $email_verified_at = null;
    protected string $password;
    protected ?string $remember_token = null;
    protected ?string $created_at = null;
    protected ?string $updated_at = null;
    protected ?string $deleted_at = null;
    protected string $first_name;
    protected ?string $last_name = null;
    protected ?string $pending_email = null;
    protected string $timezone;
    protected string $locale = 'en';

    public function toArray(): array
    {
        return [
                    'id' => $this->id ?? null,
                    'email' => $this->email ?? null,
                    'email_verified_at' => $this->email_verified_at ?? null,
                    'password' => $this->password ?? null,
                    'remember_token' => $this->remember_token ?? null,
                    'created_at' => $this->created_at ?? null,
                    'updated_at' => $this->updated_at ?? null,
                    'deleted_at' => $this->deleted_at ?? null,
                    'first_name' => $this->first_name ?? null,
                    'last_name' => $this->last_name ?? null,
                    'pending_email' => $this->pending_email ?? null,
                    'timezone' => $this->timezone ?? null,
                    'locale' => $this->locale ?? null,
                ];
    }

    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmailVerifiedAt(?string $email_verified_at): self
    {
        $this->email_verified_at = $email_verified_at;
        return $this;
    }

    public function getEmailVerifiedAt(): ?string
    {
        return $this->email_verified_at;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;
        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setRememberToken(?string $remember_token): self
    {
        $this->remember_token = $remember_token;
        return $this;
    }

    public function getRememberToken(): ?string
    {
        return $this->remember_token;
    }

    public function setCreatedAt(?string $created_at): self
    {
        $this->created_at = $created_at;
        return $this;
    }

    public function getCreatedAt(): ?string
    {
        return $this->created_at;
    }

    public function setUpdatedAt(?string $updated_at): self
    {
        $this->updated_at = $updated_at;
        return $this;
    }

    public function getUpdatedAt(): ?string
    {
        return $this->updated_at;
    }

    public function setDeletedAt(?string $deleted_at): self
    {
        $this->deleted_at = $deleted_at;
        return $this;
    }

    public function getDeletedAt(): ?string
    {
        return $this->deleted_at;
    }

    public function setFirstName(string $first_name): self
    {
        $this->first_name = $first_name;
        return $this;
    }

    public function getFirstName(): string
    {
        return $this->first_name;
    }

    public function setLastName(?string $last_name): self
    {
        $this->last_name = $last_name;
        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->last_name;
    }

    public function setPendingEmail(?string $pending_email): self
    {
        $this->pending_email = $pending_email;
        return $this;
    }

    public function getPendingEmail(): ?string
    {
        return $this->pending_email;
    }

    public function setTimezone(string $timezone): self
    {
        $this->timezone = $timezone;
        return $this;
    }

    public function getTimezone(): string
    {
        return $this->timezone;
    }

    public function setLocale(string $locale): self
    {
        $this->locale = $locale;
        return $this;
    }

    public function getLocale(): string
    {
        return $this->locale;
    }
}
