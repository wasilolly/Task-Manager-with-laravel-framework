<h1>Task Manager built on Laravel </h1>
<ul>
    <li>Users can assign task to other users</li>
    <li>CRUD resources on Task</li>
<li>Admin Dashboard</li>
<li>Email notification to users after task creation and completion</li>
    <li>Admin dashboard to summarize actions</li>
 </ul>
 
<div class="snippet-clipboard-content position-relative overflow-auto" data-snippet-clipboard-copy-content="git clone https://github.com/wasilolly/Task-Manager-with-laravel-framework.git 
composer install
cp .env.example .env
">
<pre><code>git clone https://github.com/wasilolly/Task-Manager-with-laravel-framework.git
composer install
cp .env.example .env
</code></pre>
</div>
<p>Then create the necessary database.</p>
<div class="snippet-clipboard-content position-relative overflow-auto" data-snippet-clipboard-copy-content="php artisan db
create database blog
">
<pre>
<code>php artisan db
create database taskmanagement
</code>
</pre>
</div>
<p>And run the initial migrations and seeders.</p>
<div class="snippet-clipboard-content position-relative overflow-auto" data-snippet-clipboard-copy-content="php artisan migrate --seed
">
<pre><code>php artisan migrate --seed
</code></pre>
</div>
