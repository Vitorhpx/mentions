Olá {!! $user->display_name !!}!

{!! $blueprint->reply->user->display_name !!} respondeu ao seu post (#{!! $blueprint->post->number !!}) em {!! $blueprint->post->discussion->title !!}.

{!! app()->url() !!}/d/{!! $blueprint->reply->discussion_id !!}/{!! $blueprint->reply->number !!}

---

{!! $blueprint->reply->content !!}
