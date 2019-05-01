# Internet Programming: Design Project Assignment

Find `ip_design_project.pdf` file in this folder, and refer to all the instructions given there. 

You have to submit your project into this repository before 05.05.2019 (midnight).

# Laravel - Getting Started
This repository holds the starting source code of the "PHP Development with Laravel - Auth & Users" course of Max Schwarzmueller.

Clone this repository to start with the same code I start with in this course.


# Clone Project, Install Dependencies and Configure Database Project structure

1. Clone newly created repository from accepted assignment to your local labs folder.

2. Open terminal inside that folder and run following command composer install to install all PHP
dependencies of cloned project

3. Rename .env.example file to .env file. In command line run mv .env.example .env (Linux or
MacOS) or ren .env.example .env (Windows)

4. Run following command afterwards: php artisan key:generate

5. Go to https://remotemysql.com/signup.html and provide some email address.It will create a free
database account. Save details of your newly created database account into somewhere safe. You can
login to your database using these credentials in this https://remotemysql.com/phpmyadmin/

6. In your Laravel project folder, open .env file and copy your remote database credentials to corresponding
environment variables inside .env file, and save it.

7. In your laravel project folder, open config\database.php file and ensure that your mysql configuration is set
as shown below:
'mysql ' => [
'driver ' => 'mysql ',
'host ' => env (' DB_HOST ', 'localhost ') ,
'port ' => env (' DB_PORT ', '3306 ') ,
'database ' => env (' DB_DATABASE ', 'forge ') ,
'username ' => env (' DB_USERNAME ', 'forge ') ,
'password ' => env (' DB_PASSWORD ', ''),
'charset ' => 'utf8 ',
'collation ' => 'utf8_unicode_ci ',
'prefix ' => '',
'strict ' => true ,
'engine ' => null ,
'modes ' => [
'ONLY_FULL_GROUP_BY ',
'STRICT_TRANS_TABLES ',' NO_ZERO_IN_DATE ', 'NO_ZERO_DATE ',
' ERROR_FOR_DIVISION_BY_ZERO ',
' NO_ENGINE_SUBSTITUTION ',
],
],
Ensure that modes key is set as shown above. It is important because https://remotemysql.com does not
grant full permission on your database, and your database connection driver should use specified modes.

8. Run php artisan migrate to create all necessary database tables.

9. In .env file, provide your http://mailtrap.io credentials in SMTP server settings. You should register to
http://mailtrap.ip and find them in your default inbox.
MAIL_DRIVER = smtp
MAIL_HOST = smtp . mailtrap . io
MAIL_PORT =2525
MAIL_USERNAME =[ your_mailtrap_username ]
MAIL_PASSWORD =[ your_mailtrap_password ]
MAIL_FROM_ADDRESS = sender@laravelblog . uz
MAIL_FROM_NAME = LaravelBlog

10. Once all dependencies are installed, run following command php artisan serve. This will start a Laravel’s
own development web server at http://localhost:8000. Open it in your browser. You should be able to see the project

#Happy hacking!

# Usage
Simply clone this repo and run `composer install` to install all the required dependencies. Make sure to rename the `.env.example` file to `.env` and also run `php artisan key:generate` to generate an application key for this Laravel app.

## Contributing

### IDE and writing code

- Please use **VSCode**, as it simplifies collaboration since we can share some functionality
- The project contains all the necessary configuration for **tslint** and **prettier** to support automatic _formatOnSave_.
- List of recommended VSCode extensions:
  ```
  code --install-extension donjayamanne.githistory
  code --install-extension eamodio.gitlens
  code --install-extension esbenp.prettier-vscode
  code --install-extension mikestead.dotenv
  code --install-extension msjsdiag.debugger-for-chrome
  code --install-extension shd101wyy.markdown-preview-enhanced
  code --install-extension bmewburn.vscode-intelephense-client
  code --install-extension felixfbecker.php-intellisense
  code --install-extension onecentlin.laravel5-snippets
  code --install-extension onecentlin.laravel-blade
  ```

### Version control

We adhere to the [GitLab flow](https://docs.gitlab.com/ee/workflow/gitlab_flow.html#production-branch-with-gitlab-flow) with a production branch. In short:

- There is a **master** and **production** branch. Master is protected, only merge requests are accepted. Production obviously as well. Both are being deployed constantly on any change!
- When you start working on a feature, bugfix or actually anything, you first create (locally) a new branch with a **descriptive** name and push it to the remote (GitLab).
- Commit and push your changes frequently, not just in a single large commit at the very end. This helps to actually work more structurally on the code base...
- When you are satisfied with the implementation, create a new **merge request (MR)** on GitLab. Fill out the necessary information compliant to our [guidelines](#merge-description-message). We should really use this place to discuss implementation, improve them etc. So it doesn't mean, that we should push to directly merge the MR but maybe first have a brief review and discussion. If you name the MR as **[WIP]**, it will automatically "block" it.
- Creating a merge request will trigger a CI/CD pipeline run, so all tests will be run and a **review-app** is published so anyone can check it in a production environment.
- When you merge a **MR**, make sure that you select:
  - _Remove source branch when merge request is accepted._
  - _Squash commits when merge request is accepted._
- To cleanup your local branches, see the **Git cheatsheet** below

### Git Cheatsheet

#### Rebasing

Often when you work parallel on various branches, your feature branch gets quickly out of date with regard to the master branch. You can use "rebase" to have a work around for this:
See here for an overview: [How to Rebase a Pull Request](https://github.com/edx/edx-platform/wiki/How-to-Rebase-a-Pull-Request):

- Get the lastest master
  `git fetch your-branch`

- Simply run:
  `git rebase master`

#### Stashing

Sometimes you have changes in current branch that are not yet comitted and you want to "save" them and apply them in another branch.
For this, you can use `git stash`:

- Store the files into
  `git stash`

- Show them:
  `git stash show`

- Then apply them in a new branch (first change to this):
  `git stash apply`

#### Cleanup of "stale" branches

- List all "non-merged" branches:
  `git branch --no-merged`

- Delete a specific branch:
  `git branch -D initial-tslint`

- Or combined in one step:
  `git branch -D $(git branch --no-merged)`

- Remove stall remote references:
  `git remote prune origin`

- Merge the branch locally and fix any conflict that come up:

```
git fetch origin
git checkout origin/master
git merge --no-ff ci-cd-additional-setup
git push origin master
```

- Combined, but with "merged" to master (will prob. not work, as merging is done on GitLab):
  `git branch -d $(git branch --merged=master | grep -v master | grep -v production)`

  `git fetch --prune`


- List all "non-merged" branches:
  `git branch --no-merged`

- Delete a specific branch:
  `git branch -D initial-tslint`

- Or combined in one step:
  `git branch -d $(git branch --no-merged)`

- Remove stall remote references:
  `git remote prune origin`

- Merge the branch locally and fix any conflict that come up:

```
git fetch origin
git checkout origin/master
git merge --no-ff ci-cd-additional-setup
git push origin master
```

- Combined, but with "merged" to master (will prob. not work, as merging is done on GitLab):
  `git branch -d $(git branch --merged=master | grep -v master)`
  `git fetch --prune`

## Merge Description Message

A merge request description consists of three distinct parts separated by a blank line: the title, a body and a footer. The layout looks like this:

```
type: subject

body

footer

```

The title consists of the type of the message and subject.

### The Type

The type is contained within the title and can be one of these types:

- **feat:** a new feature
- **fix:** a bug fix
- **docs:** changes to documentation
- **style:** formatting, missing semi colons, etc; no code change
- **refactor:** refactoring production code
- **test:** adding tests, refactoring test; no production code change
- **chore:** updating build tasks, package manager configs, etc; no production code change

### The Subject

Subjects should be no greater than 50 characters, should begin with a capital letter and do not end with a period.
Use an imperative tone to describe what a commit does, rather than what it did. For example, use **change**; not changed or changes.

### The Body

Not all commits are complex enough to warrant a body, therefore it is optional and only used when a commit requires a bit of explanation and context. Use the body to explain the **what** and **why** of a commit, not the how.
When writing a body, the blank line between the title and the body is required and you should limit the length of each line to no more than 72 characters.

### The Footer

The footer is used to reference Jira ticket IDs.

### Example Merge Request Message

```
feat: Summarize changes in around 50 characters or less

More detailed explanatory text, if necessary. Wrap it to about 72
characters or so. In some contexts, the first line is treated as the
subject of the commit and the rest of the text as the body. The
blank line separating the summary from the body is critical (unless
you omit the body entirely); various tools like `log`, `shortlog`
and `rebase` can get confused if you run the two together.

Explain the problem that this commit is solving. Focus on why you
are making this change as opposed to how (the code explains that).
Are there side effects or other unintuitive consequenses of this
change? Here's the place to explain them.

Further paragraphs come after blank lines.

* Bullet points are okay, too

* Typically a hyphen or asterisk is used for the bullet, preceded by a single space, with blank lines in between, but conventions vary here


Please put the GitHub issue reference ticket at the bottom,
like this:

Resolves: PROJ123
See also: PROJ12A, PROJ213
```

