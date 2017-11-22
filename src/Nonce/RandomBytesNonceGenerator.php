<?php

/**
 * Copyright 2017 American Express Travel Related Services Company, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express
 * or implied. See the License for the specific language governing
 * permissions and limitations under the License.
 */

declare(strict_types=1);

namespace AmericanExpress\HyperledgerFabricClient\Nonce;

use AmericanExpress\HyperledgerFabricClient\Exception\InvalidArgumentException;
use Assert\Assertion;
use Assert\AssertionFailedException;

final class RandomBytesNonceGenerator implements NonceGeneratorInterface
{
    /**
     * @var int
     */
    private $nonceSize;

    /**
     * Utils constructor.
     * @param int $nonceSize
     * @throws \AmericanExpress\HyperledgerFabricClient\Exception\InvalidArgumentException
     */
    public function __construct(int $nonceSize = 24)
    {
        try {
            Assertion::greaterThan($nonceSize, -1);
        } catch (AssertionFailedException $e) {
            throw InvalidArgumentException::fromException($e);
        }

        $this->nonceSize = $nonceSize;
    }
    /**
     * @return string
     */
    public function generateNonce(): string
    {
        return \random_bytes($this->nonceSize);
    }
}
