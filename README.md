<h1>Starting the bot</h1>
<p><code>nohup php run.php &lt;host[:port]&gt; &lt;nick&gt; &lt;channel&gt; &gt;&gt; output.log &</code></p>
<br />
<h1>Notes</h1>
<p>SSL isn't enabled as of yet. Once the main bot is done however, it will be added.</p>
<br />
<h1>How to add a module</h1>
<p>Adding a module is simple. All you have to do is add the module file to bot_modules and call it MODULENAME.php. After that, you must provide some simple hook information via a variable at the top of your file. This is as follows:
<code>$info = array("module" => "Module_Name",<br /> "module_readable" => "Readable Module Name (used in functions like 'help')",<br /> "module_desc" => "Description of your module (used in functions like 'help COMMAND')",<br /> "loaded" => "function_to_run",<br /> "loaded_params" => array("parameter_name" => "parameter_name value"));</code>
