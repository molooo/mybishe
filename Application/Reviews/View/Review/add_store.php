<layout name="Layout/ReviewHead" />
<div id="home">
<form id="store_add" action="__APP__/Reviews/Review/save_store">
<div>
	<label>
		<input name="sname" id="sname" placeholder="店名" type="text" tabindex="1" required autofocus>
	</label>
</div>

<div>
	<label>
		<input name="address" id="address" placeholder="地址" type="text" tabindex="2" required autofocus>
	</label>
</div>

<div>
	<label>
		<input name="pic" id="pic" placeholder="店图" type="file" tabindex="3" required autofocus>
	</label>
</div>

<div>
	<label>
		<input name="detail" id="detail" placeholder="详细介绍" type="text" tabindex="4" required autofocus>
	</label>
</div>

<div>
	<input id="store_add_submit" type="submit" value="提交商家信息">
</div>
</form>
</div>
<div id="ency"></div>
<div id="hospital"></div>
<div id="market"></div>
