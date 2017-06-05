@extends('layouts.app')

@section('content')
    <div class="columns">
        <aside class="menu column is-2">
            <figure class="image is-square">
                <img src="http://bulma.io/images/placeholders/256x256.png">
            </figure>
            <p class="menu-label">
                General
            </p>
            <ul class="menu-list">
                <li><a>Dashboard</a></li>
                <li><a>Customers</a></li>
            </ul>
            <p class="menu-label">
                Administration
            </p>
            <ul class="menu-list">
                <li><a>Team Settings</a></li>
                <li>
                    <a class="is-active">Manage Your Team</a>
                    <ul>
                        <li><a>Members</a></li>
                        <li><a>Plugins</a></li>
                        <li><a>Add a member</a></li>
                    </ul>
                </li>
                <li><a>Invitations</a></li>
                <li><a>Cloud Storage Environment Settings</a></li>
                <li><a>Authentication</a></li>
            </ul>
            <p class="menu-label">
                Transactions
            </p>
            <ul class="menu-list">
                <li><a>Payments</a></li>
                <li><a>Transfers</a></li>
                <li><a>Balance</a></li>
            </ul>
        </aside>

        <div class="column is-10">
            <nav class="level">
                <div class="level-item has-text-centered">
                    <div>
                        <p class="heading">Tweets</p>
                        <p class="title">3,456</p>
                    </div>
                </div>
                <div class="level-item has-text-centered">
                    <div>
                        <p class="heading">Following</p>
                        <p class="title">123</p>
                    </div>
                </div>
                <div class="level-item has-text-centered">
                    <div>
                        <p class="heading">Followers</p>
                        <p class="title">456K</p>
                    </div>
                </div>
                <div class="level-item has-text-centered">
                    <div>
                        <p class="heading">Likes</p>
                        <p class="title">789</p>
                    </div>
                </div>
            </nav>
            <article class="media">
                <figure class="media-left">
                    <p class="image is-64x64">
                        <img src="http://bulma.io/images/placeholders/128x128.png">
                    </p>
                </figure>
                <div class="media-content">
                    <div class="content">
                        <p>
                            <strong>Barbara Middleton</strong>
                            <br>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis porta eros lacus, nec ultricies elit blandit non. Suspendisse pellentesque mauris sit amet dolor blandit
                            rutrum. Nunc in tempus turpis.
                            <br>
                            <small><a>Like</a> · <a>Reply</a> · 3 hrs</small>
                        </p>
                    </div>

                    <article class="media">
                        <figure class="media-left">
                            <p class="image is-48x48">
                                <img src="http://bulma.io/images/placeholders/96x96.png">
                            </p>
                        </figure>
                        <div class="media-content">
                            <div class="content">
                                <p>
                                    <strong>Sean Brown</strong>
                                    <br>
                                    Donec sollicitudin urna eget eros malesuada sagittis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam blandit
                                    nisl a nulla sagittis, a lobortis leo feugiat.
                                    <br>
                                    <small><a>Like</a> · <a>Reply</a> · 2 hrs</small>
                                </p>
                            </div>

                            <article class="media">
                                Vivamus quis semper metus, non tincidunt dolor. Vivamus in mi eu lorem cursus ullamcorper sit amet nec massa.
                            </article>

                            <article class="media">
                                Morbi vitae diam et purus tincidunt porttitor vel vitae augue. Praesent malesuada metus sed pharetra euismod. Cras tellus odio, tincidunt iaculis diam non, porta
                                aliquet tortor.
                            </article>
                        </div>
                    </article>

                    <article class="media">
                        <figure class="media-left">
                            <p class="image is-48x48">
                                <img src="http://bulma.io/images/placeholders/96x96.png">
                            </p>
                        </figure>
                        <div class="media-content">
                            <div class="content">
                                <p>
                                    <strong>Kayli Eunice </strong>
                                    <br>
                                    Sed convallis scelerisque mauris, non pulvinar nunc mattis vel. Maecenas varius felis sit amet magna vestibulum euismod malesuada cursus libero. Vestibulum ante
                                    ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus lacinia non nisl id feugiat.
                                    <br>
                                    <small><a>Like</a> · <a>Reply</a> · 2 hrs</small>
                                </p>
                            </div>
                        </div>
                    </article>
                </div>
            </article>
            <article class="media">
                <figure class="media-left">
                    <p class="image is-64x64">
                        <img src="http://bulma.io/images/placeholders/128x128.png">
                    </p>
                </figure>
                <div class="media-content">
                    <p class="control">
                        <textarea class="textarea" placeholder="Add a comment..."></textarea>
                    </p>
                    <p class="control">
                        <button class="button">Post comment</button>
                    </p>
                </div>
            </article>
        </div>
    </div>
@endsection