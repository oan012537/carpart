<!DOCTYPE html>
<head>
    <title>Pusher Test</title>
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script>
        
        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;
        var pusher = new Pusher('987aef21a9008c412013', {
            cluster: 'ap1'
        });
        console.log(pusher)
        var channel = pusher.subscribe('chat');
        // alert();
        console.log(channel)
        channel.bind('MessageSent', function(data) {
            console.log(data)
            alert(JSON.stringify(data));
        });
        </script>
        <!-- minified snippet to load TalkJS without delaying your page -->
        <script>
            (function(t,a,l,k,j,s){
            s=a.createElement('script');s.async=1;s.src="https://cdn.talkjs.com/talk.js";a.head.appendChild(s)
            ;k=t.Promise;t.Talk={v:3,ready:{then:function(f){if(k)return new k(function(r,e){l.push([f,r,e])});l
            .push([f])},catch:function(){return k&&new k()},c:l}};})(window,document,[]);
        </script>
        <!-- container element in which TalkJS will display a chat UI -->
    
</head>
<body>
    <h1>Pusher Test</h1>
    <p>
        Try publishing an event to channel <code>my-channel</code>
        with event name <code>my-event</code>.
    </p>
    @foreach ($data as $item)
        <p>{{$item->message}}</p>
    @endforeach
    <form method="POST" action="{{route('messages')}}" enctype="multipart/form-data">
        @csrf
        <input type="text" class="form-control" name="message">
        <button type="btn btn-success" type="submit">save</button>
    </form>
    <div id="talkjs-container" style="width: 90%; margin: 30px; height: 500px">
        <i>Loading chat...</i>
    </div>

</body>
<script>
  Talk.ready.then(function () {
  var me = new Talk.User({
    id: '123456',
    name: 'ทันจิโร่',
    email: 'alice@example.com',
    photoUrl: 'https://inzpy.com/wp-content/uploads/2021/10/1-copy-5-9.jpg',
    welcomeMessage: 'Hey there! How are you? :-)',
  });
  window.talkSession = new Talk.Session({
    appId: 'toofajzr',
    me: me,
  });
  var other = new Talk.User({
    id: '654321',
    name: 'ยูกิ',
    email: 'Sebastian@example.com',
    photoUrl: 'https://jp.owndays.com/images/specials/products/kimetsu/sect5_chara.png',
    welcomeMessage: 'Hey, how can I help?',
  });
  var other2 = new Talk.User({
    id: '123456',
    name: 'ยูกิ2',
    email: 'Sebastian2@example.com',
    photoUrl: 'https://jp.owndays.com/images/specials/products/kimetsu/sect5_chara.png',
    welcomeMessage: 'Hey',
  });
  var conversation = talkSession.getOrCreateConversation(
    Talk.oneOnOneId(me, other)
  );
  conversation.setParticipant(me);
  conversation.setParticipant(other);

  var inbox = talkSession.createInbox({ selected: conversation });
  inbox.mount(document.getElementById('talkjs-container'));
});
</script>