Olá {!! $user->display_name !!}!

{!! $blueprint->post->user->display_name !!} mencionou você em um post: {!! $blueprint->post->discussion->title !!}.

{!! app()->url() !!}/d/{!! $blueprint->post->discussion_id !!}/{!! $blueprint->post->number !!}

---

{!! $blueprint->post->content !!}
