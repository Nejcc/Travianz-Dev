<div class="menu">
   <li class="{{ Route::currentRouteName() == 'installation.greetings' ? 'c2 f9' : 'c1 f9' }}">
   	@lang('installation/menu.greetings')
   </li>
   <li class="{{ Route::currentRouteName() == 'installation.config' ? 'c2 f9' : 'c1 f9' }}">
   	@lang('installation/menu.config')
   </li>
   <li class="{{ Route::currentRouteName() == 'installation.database' ? 'c2 f9' : 'c1 f9' }}">
   	@lang('installation/menu.database')
   </li>
   <li class="{{ Route::currentRouteName() == 'installation.accounts' ? 'c2 f9' : 'c1 f9' }}">
   	@lang('installation/menu.accounts')
   </li>
   <li class="{{ Route::currentRouteName() == 'installation.finish' ? 'c2 f9' : 'c1 f9' }}">
   	@lang('installation/menu.finish')
   </li>
</div>
