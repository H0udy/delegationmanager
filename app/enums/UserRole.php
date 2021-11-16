<?php

namespace aPP\enums;

class UserRole
{
    const ADMIN = 'admin';
    const MANAGER = 'manager';
    const EMPLOYEE = 'employee';

    const TYPES = [
        self::ADMIN,
        self::MANAGER,
        self::EMPLOYEE
    ];
}