<?php

return [
	'test-network' => [
		'orderer' => [
			'url' => 'localhost:7050',
			'server-hostname' => 'orderer.example.com',
			'tls_cacerts' => __DIR__ . '/../../test/fixture/sdkintegration/e2e-2Orgs/channel/crypto-config/ordererOrganizations/example.com/orderers/orderer.example.com/msp/tlscacerts/ca.example.com-cert.pem'
		],
		'org1' => [
			'name' => 'peerOrg1',
			'mspid' => 'Org1MSP',
			'ca' => [
				'url' => 'https://localhost:7054',
				'name' => 'ca-org1'
			],
			'admin_certs' => __DIR__ . '/../../test/fixture/sdkintegration/e2e-2Orgs/channel/crypto-config/peerOrganizations/org1.example.com/users/Admin@org1.example.com/msp/admincerts/Admin@org1.example.com-cert.pem',
			'private_key' => __DIR__ . '/../../test/fixture/sdkintegration/e2e-2Orgs/channel/crypto-config/peerOrganizations/org1.example.com/users/Admin@org1.example.com/msp/keystore/6b32e59640c594cf633ad8c64b5958ef7e5ba2a205cfeefd44a9e982ce624d93_sk',
			'peer1' => [
				'requests' => 'localhost:7051',
				'events' => 'localhost:7053',
				'server-hostname' => 'peer0.org1.example.com',
				'tls_cacerts' => __DIR__ . '/../../test/fixture/sdkintegration/e2e-2Orgs/channel/crypto-config/peerOrganizations/org1.example.com/peers/peer0.org1.example.com/tlscacerts/org1.example.com-cert.pem'
			]
		],
		'org2' => [
			'name' => 'peerOrg2',
			'mspid' => 'Org2MSP',
			'ca' => [
				'url' => 'https://localhost:8054',
				'name' => 'ca-org2'
			],
			'peer1' => [
				'requests' => 'localhost:8051',
				'events' => 'localhost:8053',
				'server-hostname' => 'peer0.org2.example.com',
				'tls_cacerts' => __DIR__ . '/../../test/fixture/sdkintegration/e2e-2Orgs/channel/crypto-config/peerOrganizations/org2.example.com/peers/peer0.org2.example.com/tlscacerts/org2.example.com-cert.pem'
			]
		]
	]
];