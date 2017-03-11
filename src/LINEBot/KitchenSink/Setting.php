<?php

/**
 * Copyright 2016 LINE Corporation
 *
 * LINE Corporation licenses this file to you under the Apache License,
 * version 2.0 (the "License"); you may not use this file except in compliance
 * with the License. You may obtain a copy of the License at:
 *
 *   https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */

namespace LINE\LINEBot\KitchenSink;

class Setting
{
    public static function getSetting()
    {
        return [
            'settings' => [
                'displayErrorDetails' => true, // set to false in production

                'logger' => [
                    'name' => 'slim-app',
                    'path' => __DIR__ . '/../../../logs/app.log',
                ],

                'bot' => [
                    'channelToken' => getenv('LINEBOT_CHANNEL_TOKEN') ?: 'R4hKnmPAJKtKZMDI/T13MyW7aOAokV8ZTZddz6LTUWv1WCsH+HEqcGWvfNLpZEI2VakJt3qnQos+xREv+/s7l53GkXpYwT0jVxe6gBgNUMAltMwKx2KZW6u0EWLv0n18RSqLPz5mGPfmzIWJhYUjWFL1fjtlnWhWnycDBfYZCqc=',
                    'channelSecret' => getenv('LINEBOT_CHANNEL_SECRET') ?: '4f79c1c70420d3df8252a0dc6f12bc3c',
                ],

                'apiEndpointBase' => getenv('LINEBOT_API_ENDPOINT_BASE'),
            ],
        ];
    }
}
