# SyncUp

The companion repository for the **NativePHP Masterclass**. SyncUp is a mobile chat app built with Laravel and [NativePHP Mobile](https://nativephp.com/docs/mobile), using fully native UI (SuperNative components and EDGE elements).

**Sign up for the course:** [nativephp.com/course](https://nativephp.com/course)

## How This Repository Is Organized

Each commit holds the work from one video in the course, so you can jump to the state of the app at the end of any video.

| Commit message | Video |
|---|---|
| `Initial commit` | Starting point: a fresh NativePHP Mobile starter app |
| `Building UI With EDGE` | The Login screen, built with EDGE elements |
| `State and Interactions` | Component state, form binding, and the Register screen |
| `Layouts and Navigation` | The tab bar layout, title bars, and moving between screens |

## Getting Started

### Requirements

- PHP 8.4+
- Composer
- For iOS: macOS with Xcode and an iOS simulator
- For Android: Android Studio with an emulator (or a physical device)

For more detail, see the [NativePHP Mobile documentation](https://nativephp.com/docs/mobile).

### Clone and install

```bash
git clone https://github.com/NativePHP/syncup.git
cd syncup
composer install
cp .env.example .env
php artisan key:generate
```

Set a unique app ID in `.env` using reverse-domain notation, for example:

```dotenv
NATIVEPHP_APP_ID=com.yourname.syncup
```

Then install the native shell:

```bash
php artisan native:install
```

### Run the app

```bash
php artisan native:run ios        # or: php artisan native:run android
```

To hot reload while you edit, add `--watch` (`php artisan native:run ios --watch`) or run `php artisan native:watch` in another terminal.

You don't need to run migrations yourself for the app. NativePHP runs them on the device when the app starts.

## Viewing the App at the End of a Video

1. List the commits (oldest first) to find the one for that video:

   ```bash
   git log --oneline --reverse
   ```

2. Check out that commit using its hash:

   ```bash
   git checkout <commit-hash>
   ```

   Git will say you're in a "detached HEAD" state. That's expected. You're viewing a snapshot, not a branch.

3. Reinstall dependencies, because they may have changed between videos, then rebuild the app:

   ```bash
   composer install
   php artisan native:run ios        # or android
   ```

4. When you're done, go back to the latest version:

   ```bash
   git checkout main
   ```

### Coding along from a specific video

To write code on top of a particular video's state, create a branch from that commit:

```bash
git switch -c my-work <commit-hash>
```

### Seeing what changed in a video

To see exactly what a video added or changed:

```bash
git show <commit-hash>              # full diff for that video
git show --stat <commit-hash>       # just the list of files changed
```

## Running Tests

```bash
php artisan test
```

## Troubleshooting

- **Changes don't show up on the device:** rebuild with `php artisan native:run`. Native code and plugins are only compiled in at build time.
- **Build fails after switching commits:** run `composer install` again, then `php artisan native:install` to refresh the native shell.
- **"installed but not registered" plugin warning:** run `php artisan native:plugin:register vendor/plugin-name`.

## License

SyncUp is open-source software licensed under the [MIT license](LICENSE.md).
