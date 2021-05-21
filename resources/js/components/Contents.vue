<template>
    <div class="container">
        <div class="wrapper" style="min-height: 460px;">
            <h2><b>Your One-Stop Hub for All Tech-related News</b></h2>
            <br />
            <div class="row mt-2">
                <div class="col-sm-3">
                    <h4 onclick="display()" id="text-tech">| Tech Stories</h4>
                </div>
                <div class="col-sm-3">
                    <h4 class="text-muted" onclick="display()" id="text-game">
                        | Game Stories
                    </h4>
                </div>
                <div class="col-sm-3">
                    <h4
                        class="text-muted"
                        id="text-videos"
                        onclick="display1()"
                    >
                        | Latest Videos
                    </h4>
                </div>
                <hr />
            </div>
            <div class="mainpage display-block">
                <div class="row card-container cards">
                    <div class="col-sm-3">
                        <div
                            class="card m-3"
                            v-for="t_news in tech"
                            style="width: 400%;"
                            :key="t_news.id"
                        >
                            <a
                                v-bind:href="t_news.article_image"
                                target="_blank"
                            >
                                <div class="card-body rounded">
                                    <h5 class="card-title">
                                        {{ t_news.article_title }}
                                    </h5>
                                    <p class="card-text te">
                                        {{ t_news.article_content }}
                                    </p>
                                    <p class="card-text text-muted">
                                        Article by {{ t_news.article_author }}
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div id="secondpage" class="style_secondpage display-none">
                <div class="row card-container cards">
                    <div class="col-md-2">
                        <div
                            class="card m-3"
                            v-for="games in game"
                            style="width: 650%;"
                            :key="games.id"
                        >
                            <a v-bind:href="games.game_link" target="_blank">
                                <div class="card-body rounded">
                                    <h5 class="card-title">
                                        <p>
                                            <strong>{{
                                                games.article_game
                                            }}</strong>
                                            by
                                            <span
                                                style="font-weight: lighter;"
                                                >{{
                                                    games.article_author
                                                }}</span
                                            >
                                        </p>
                                        {{ games.article_title }}
                                    </h5>
                                    <p class="card-text te">
                                        {{ games.article_content }}
                                    </p>
                                    <a
                                        v-bind:href="games.game_link"
                                        class="card-text text-muted"
                                    >
                                        Check out the game here!
                                    </a>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div id="thirdpage" class="display-none">
                <div
                    class="row card-container cards"
                    style="left: 2%; position: relative"
                >
                    <div
                        class="col-md-3 m-4"
                        v-for="videos in vids"
                        :key="videos.id"
                    >
                        <div class="card m-3" style="width: 18rem">
                            <a v-bind:href="videos.video_link" target="_blank">
                                <div class="card-body rounded shadow vide-card">
                                    <div class="text-center">
                                        <img
                                            v-bind:src="videos.video_thumbnail"
                                            alt=""
                                            class="card-img-top"
                                        />
                                        <hr />
                                    </div>
                                    <div class="d-block">
                                        <h5 class="card-title">
                                            {{ videos.video_title }}
                                        </h5>
                                        <p class="card-text te">
                                            {{ videos.uploader }}
                                        </p>
                                        <p class="card-text text-muted">
                                            Uploaded on
                                            {{ videos.date_uploaded }}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr />
        <div class="row">
            <div class="col">
                <h4>Reach out to us.</h4>
                <div class="d-flex flex-wrap">
                    <a href="" class="mr-4">
                        <i class="fab fa-facebook-f"></i>
                    </a>

                    <a href="" class="mr-4">
                        <i class="fab fa-twitter"></i>
                    </a>

                    <a href="" class="mr-4">
                        <i class="fab fa-instagram"></i>
                    </a>

                    <a href="" class="mr-4">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            tech: [],
            game: [],
            vids: [],
            style_firstpage: "show_firstpage",
            style_secondpage: "none_secondpage"
        };
    },
    methods: {
        update_news: function() {
            axios
                .get("http://127.0.0.1:8000/api/news")
                .then(response => (this.tech = response.data.data));
        },
        update_games: function() {
            axios
                .get("http://127.0.0.1:8000/api/games")
                .then(response => (this.game = response.data.data));
        },
        update_videos: function() {
            axios
                .get("http://127.0.0.1:8000/api/videos")
                .then(response => (this.vids = response.data.data));
        }
    },
    mounted() {
        // axios
        //     .get("http://127.0.0.1:8000/api/news")
        //     .then(response => (this.tech = response.data.data));

        // axios
        //     .get("http://127.0.0.1:8000/api/games")
        //     .then(response => (this.game = response.data.data));

        // axios
        //     .get("http://127.0.0.1:8000/api/videos")
        //     .then(response => (this.vids = response.data.data));

        this.update_news();
        this.timer = setInterval(this.update_news, 10000);

        this.update_games();
        this.timer = setInterval(this.update_games, 10000);

        this.update_videos();
        this.timer = setInterval(this.update_videos, 10000);
    }
};
</script>

<style></style>
