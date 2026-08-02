# TODO / For consideration

- Consider implementing the "enabled state" capability
  (IProvideEnabledStateBackend): would let the enable/disable flag for
  users be managed by the backend itself, e.g. derived from the mail
  account's state in ISPConfig.

- Consider implementing the "profile field permissions" capability
  (IPropertyPermissionBackend): would allow fine-grained control over
  which profile fields users may edit themselves, e.g. locking the
  e-mail address to the one from ISPConfig.

- Investigate how alias e-mail addresses per mail account can be
  enumerated from ISPConfig, and include them as secondary e-mail
  addresses on the Nextcloud profile.

- On every login, check ISPConfig for changed user data (e-mail,
  display name, aliases) and update the stored Nextcloud data
  accordingly — not only on first login.

- Modernize configuration and registration: register the backend from the
  app itself via the DI container (constructor injection instead of
  service locator), moving configuration from config.php to app settings,
  with the existing config.php entry still honored as a fallback.

- Switch per-user preference writes from the classic config service
  (IConfig::setUserValue, deprecated since NC 33) to the typed
  IUserConfig service once the app's minimum supported version is 32+.
