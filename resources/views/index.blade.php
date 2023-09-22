<x-layout>

@include('/partials/_hero')

<div class="books-section">
    <div class="container">
        <div class="sb-line">
            <h1>Reading Spotlight</h1>
            <a href="books.html"><h2>SEE ALL BOOKS</h2></a>
        </div>
        <div class="sb-line-top margin-top-3">
            <div class="book-card">
                <img src="{{ asset('img/no-image.jpg') }}" alt="">
                <a href="book.html"><h2 class="lighter-text">Good Omens: The Nice and Accurate Prophecies of Agnes Nutter, Witch</h2></a>
                <h3 class="lighter-text">Terry Pratchett, Neil Gaiman</h3>
                <hr>
                <h3 class="lighter-text">Horror, Fantasy, Comedy</h3>
            </div>

            <div class="book-card">
                <img src="{{ asset('img/no-image.jpg') }}" alt="">
                <a href="book.html"><h2 class="lighter-text">The Hitchhiker's Guide to the Galaxy</h2></a>
                <h3 class="lighter-text">Douglas Adams</h3>
                <hr>
                <h3 class="lighter-text">Comic science fiction</h3>
            </div>

            <div class="book-card">
                <img src="{{ asset('img/no-image.jpg') }}" alt="">
                <a href="book.html"><h2 class="lighter-text">The Lucifer Effect</h2></a>
                <h3 class="lighter-text">Philip Zimbardo</h3>
                <hr>
                <h3 class="lighter-text">Psychology of good and evil</h3>
            </div>

            <div class="book-card">
                <img src="{{ asset('img/no-image.jpg') }}" alt="">
                <a href="book.html"><h2 class="lighter-text">A Game of Thrones</h2></a>
                <h3 class="lighter-text">George R. R. Martin</h3>
                <hr>
                <h3 class="lighter-text">Political novel, Epic fantasy</h3>
            </div>
        </div>
    </div>
</div>

<div class="quote">
    <p class="marquee margin-top-3">A reader lives a thousand lives before he dies</p>
</div>

<div class="events-section">
    <div class="container">
        <div class="sb-line">
            <h1>What's On</h1>
            <a href="/events"><h2>SEE ALL EVENTS</h2></a>
        </div>
        <div class="sb-line-top">
            <div class="event-card margin-top-3">
                <div class="event-card-img">
                    <img src="{{ asset('img/no-image.jpg') }}" alt="">
                </div>
                <a href="event.html"><h2 class="lighter-text small-margin">Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper </h2></a>
                <div class="sb-line-left small-margin">
                    <h3 class="date-or-place lighter-text">June 7, 8:00 pm</h3>
                    <h3 class="date-or-place lighter-text">Online</h3>
                </div>
                <p class="small-margin">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Sed aliquam ultrices mauris. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Praesent adipiscing. Phasellus ullamcorper ipsum rutrum nunc. Nunc nonummy metus. Vestibulum volutpat pretium libero. Cras id dui. Aenean ut</p>
            </div>
            <div class="small-event-cards">
                <div class="small-event-card">
                    <a href="event.html"><h2 class="lighter-text small-margin">Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper </h2></a>
                    <div class="sb-line-left small-margin">
                        <h3 class="date-or-place lighter-text">June 7, 8:00 pm</h3>
                        <h3 class="date-or-place lighter-text">Online</h3>
                    </div>
                </div>
                <hr class="white-line">
                <div class="small-event-card">
                    <a href="event.html"><h2 class="lighter-text small-margin">Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper </h2></a>
                    <div class="sb-line-left small-margin">
                        <h3 class="date-or-place lighter-text">June 7, 8:00 pm</h3>
                        <h3 class="date-or-place lighter-text">Online</h3>
                    </div>
                </div>
                <hr class="white-line">
                <div class="small-event-card">
                    <a href="event.html"><h2 class="lighter-text small-margin">Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper </h2></a>
                    <div class="sb-line-left small-margin">
                        <h3 class="date-or-place lighter-text">June 7, 8:00 pm</h3>
                        <h3 class="date-or-place lighter-text">Online</h3>
                    </div>
                </div>
                <hr class="white-line">
                <div class="small-event-card">
                    <a href="event.html"><h2 class="lighter-text small-margin">Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper </h2></a>
                    <div class="sb-line-left small-margin">
                        <h3 class="date-or-place lighter-text">June 7, 8:00 pm</h3>
                        <h3 class="date-or-place lighter-text">Online</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="posts-section">
    <div class="container">
        <div class="sb-line">
            <h1>From the Blog</h1>
            <a href="/posts"><h2>SEE ALL POSTS</h2></a>
        </div>

        <div class="sb-line-top">
            <div class="post-card">
                <div class="post-card-img">
                    <img src="{{ asset('img/no-image.jpg') }}" alt="">
                </div>
                <h3 class="lighter-text small-margin">News</h3>
                <a href=""><h2 class="lighter-text small-margin">Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper </h2></a>
                <h3 class="lighter-text small-margin"></h3>
                <p class="small-margin">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Sed aliquam ultrices mauris. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Praesent adipiscing. Phasellus ullamcorper ipsum rutrum nunc. Nunc nonummy metus. Vestibulum volutpat pretium libero. Cras id dui. Aenean ut</p>
            </div>

            <div class="post-card">
                <div class="post-card-img">
                    <img src="{{ asset('img/no-image.jpg') }}" alt="">
                </div>
                <h3 class="lighter-text small-margin">News</h3>
                <a href=""><h2 class="lighter-text small-margin">Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper </h2></a>
                <h3 class="lighter-text small-margin"></h3>
                <p class="small-margin">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Sed aliquam ultrices mauris. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Praesent adipiscing. Phasellus ullamcorper ipsum rutrum nunc. Nunc nonummy metus. Vestibulum volutpat pretium libero. Cras id dui. Aenean ut</p>
            </div>
        </div>
    </div>
</div>

</x-layout>