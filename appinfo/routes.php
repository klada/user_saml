<?php
/**
 * @copyright Copyright (c) 2016 Lukas Reschke <lukas@statuscode.ch>
 *
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

namespace OCA\User_SAML\AppInfo;

return [
	'routes' => [
		[
			'name' => 'SAML#login',
			'url' => '/saml/login',
			'verb' => 'GET',
		],
		[
			'name' => 'SAML#getMetadata',
			'url' => '/saml/metadata',
			'verb' => 'GET',
		],
		[
			'name' => 'SAML#assertionConsumerService',
			'url' => '/saml/acs',
			'verb' => 'POST',
		],
		[
			'name' => 'SAML#singleLogoutService',
			'url' => '/saml/sls',
			'verb' => 'GET',
		],
		[
			'name' => 'SAML#singleSignOut',
			'url' => '/saml/signOut',
			'verb' => 'POST',
		],
		[
			'name' => 'SAML#notProvisioned',
			'url' => '/saml/notProvisioned',
			'verb' => 'GET',
		],
	],
];
