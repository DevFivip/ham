<section x-data="
        {
          openFaq1: false, 
          openFaq2: false, 
          openFaq3: false, 
          openFaq4: false, 
          openFaq5: false, 
          openFaq6: false,
          openFaq7: false
        }
      " class="overflow-hidden bg-blue-100 py-10">
    <div class="container mx-auto px-4">
        <div class="-mx-4 flex flex-wrap items-center justify-between">
            <div class="w-full px-4">
                <div class="mx-auto mb-[60px] max-w-[520px] text-center lg:mb-20">
                    <span class="mb-8 text-3xl">🙋</span>
                    <h2 class="mb-4 text-3xl font-bold text-fuchsia-700 sm:text-4xl md:text-[40px]">
                        {{__("FAQ")}}
                    </h2>
                </div>
            </div>
        </div>


        <div class="-mx-4 flex flex-wrap">
            <div class="w-full px-4 lg:w-1/2">
                <div class="single-faq mb-8 w-full rounded-lg border border-[#F3F4FE] bg-blue-500 p-4 sm:p-8 lg:px-6 xl:px-8">
                    <button class="faq-btn flex w-full text-left" @click="openFaq1 = !openFaq1">
                        <div class="mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg bg-primary bg-opacity-5 text-primary">
                            <svg width="17" height="10" viewBox="0 0 17 10" class="icon fill-current">
                                <path d="M7.28687 8.43257L7.28679 8.43265L7.29496 8.43985C7.62576 8.73124 8.02464 8.86001 8.41472 8.86001C8.83092 8.86001 9.22376 8.69083 9.53447 8.41713L9.53454 8.41721L9.54184 8.41052L15.7631 2.70784L15.7691 2.70231L15.7749 2.69659C16.0981 2.38028 16.1985 1.80579 15.7981 1.41393C15.4803 1.1028 14.9167 1.00854 14.5249 1.38489L8.41472 7.00806L2.29995 1.38063L2.29151 1.37286L2.28271 1.36548C1.93092 1.07036 1.38469 1.06804 1.03129 1.41393L1.01755 1.42738L1.00488 1.44184C0.69687 1.79355 0.695778 2.34549 1.0545 2.69659L1.05999 2.70196L1.06565 2.70717L7.28687 8.43257Z" stroke="#eab308" fill="#fff"></path>
                            </svg>
                        </div>
                        <div class="w-full">
                            <h4 class="text-lg font-bold text-white">
                                {{__("What is Onlyfans?")}}
                            </h4>
                        </div>
                    </button>
                    <div x-show="openFaq1" class="faq-content pl-[62px]" style="display: none;">
                        <p class="py-3  leading-relaxed font-bold text-white"> {{__("Onlyfans is a social media platform that was created in 2015 by two friends, Billie Dirlam and Danny Fratella. It is a place where members can follow their favorite adult entertainers. Fans get to see the videos and photos of their favorite stars as soon as they are uploaded by them. It also provides an opportunity for fans to interact with the stars and ask them questions via chat or message board. One can also subscribe to the channel of their favorite star on this platform, which will enable them to watch all the videos uploaded by that particular star on a monthly basis.")}}</p>
                    </div>
                </div>
                <div class="single-faq mb-8 w-full rounded-lg border border-[#F3F4FE] bg-blue-500 p-4 sm:p-8 lg:px-6 xl:px-8">
                    <button class="faq-btn flex w-full text-left" @click="openFaq2 = !openFaq2">
                        <div class="mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg bg-primary bg-opacity-5 text-primary">
                            <svg width="17" height="10" viewBox="0 0 17 10" class="icon fill-current">
                                <path d="M7.28687 8.43257L7.28679 8.43265L7.29496 8.43985C7.62576 8.73124 8.02464 8.86001 8.41472 8.86001C8.83092 8.86001 9.22376 8.69083 9.53447 8.41713L9.53454 8.41721L9.54184 8.41052L15.7631 2.70784L15.7691 2.70231L15.7749 2.69659C16.0981 2.38028 16.1985 1.80579 15.7981 1.41393C15.4803 1.1028 14.9167 1.00854 14.5249 1.38489L8.41472 7.00806L2.29995 1.38063L2.29151 1.37286L2.28271 1.36548C1.93092 1.07036 1.38469 1.06804 1.03129 1.41393L1.01755 1.42738L1.00488 1.44184C0.69687 1.79355 0.695778 2.34549 1.0545 2.69659L1.05999 2.70196L1.06565 2.70717L7.28687 8.43257Z" stroke="#eab308" fill="#fff"></path>
                            </svg>
                        </div>
                        <div class="w-full">
                            <h4 class="text-lg font-bold text-white">
                                {{__("Onlyfans taxes")}}
                            </h4>
                        </div>
                    </button>
                    <div x-show="openFaq2" class="faq-content pl-[62px]" style="display: none;">
                        <p class="py-3  leading-relaxed font-bold text-white"> {{__("Onlyfans taxes are a tricky topic. You may be wondering how they work and whether or not you need to pay them. The answer is that yes, you do need to pay taxes on your income from onlyfans and other social media platforms like YouTube and Twitch. The only exception is if you are a freelancer who does not have an employer, in which case you can claim the income as self-employed. The IRS has established guidelines for what constitutes self-employment, so it is important that you follow these guidelines when reporting your income from social media platforms to the IRS.")}}
                        </p>
                    </div>
                </div>
                <div class="single-faq mb-8 w-full rounded-lg border border-[#F3F4FE] bg-blue-500 p-4 sm:p-8 lg:px-6 xl:px-8">
                    <button class="faq-btn flex w-full text-left" @click="openFaq3 = !openFaq3">
                        <div class="mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg bg-primary bg-opacity-5 text-primary">
                            <svg width="17" height="10" viewBox="0 0 17 10" class="icon fill-current">
                                <path d="M7.28687 8.43257L7.28679 8.43265L7.29496 8.43985C7.62576 8.73124 8.02464 8.86001 8.41472 8.86001C8.83092 8.86001 9.22376 8.69083 9.53447 8.41713L9.53454 8.41721L9.54184 8.41052L15.7631 2.70784L15.7691 2.70231L15.7749 2.69659C16.0981 2.38028 16.1985 1.80579 15.7981 1.41393C15.4803 1.1028 14.9167 1.00854 14.5249 1.38489L8.41472 7.00806L2.29995 1.38063L2.29151 1.37286L2.28271 1.36548C1.93092 1.07036 1.38469 1.06804 1.03129 1.41393L1.01755 1.42738L1.00488 1.44184C0.69687 1.79355 0.695778 2.34549 1.0545 2.69659L1.05999 2.70196L1.06565 2.70717L7.28687 8.43257Z" stroke="#eab308" fill="#fff"></path>
                            </svg>
                        </div>
                        <div class="w-full">
                            <h4 class="text-lg font-bold text-white">
                                {{__("Onlyfans Gift Card")}}
                            </h4>
                        </div>
                    </button>
                    <div x-show="openFaq3" class="faq-content pl-[62px]" style="display: none;">
                        <p class="py-3  leading-relaxed font-bold text-white"> {{__("Onlyfans is a social media platform that connects fans with their favorite content creator. It allows the fans to subscribe to the channel of their choice and get exclusive content from the content creator they love. The company offers various types of subscriptions and also sells items such as t-shirts, hoodies, and gift cards. They have gift cards available in different denominations that can be purchased for any occasion.")}}
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full px-4 lg:w-1/2">
                <div class="single-faq mb-8 w-full rounded-lg border border-[#F3F4FE] bg-blue-500 p-4 sm:p-8 lg:px-6 xl:px-8">
                    <button class="faq-btn flex w-full text-left" @click="openFaq4 = !openFaq4">
                        <div class="mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg bg-primary bg-opacity-5 text-primary">
                            <svg width="17" height="10" viewBox="0 0 17 10" class="icon fill-current">
                                <path d="M7.28687 8.43257L7.28679 8.43265L7.29496 8.43985C7.62576 8.73124 8.02464 8.86001 8.41472 8.86001C8.83092 8.86001 9.22376 8.69083 9.53447 8.41713L9.53454 8.41721L9.54184 8.41052L15.7631 2.70784L15.7691 2.70231L15.7749 2.69659C16.0981 2.38028 16.1985 1.80579 15.7981 1.41393C15.4803 1.1028 14.9167 1.00854 14.5249 1.38489L8.41472 7.00806L2.29995 1.38063L2.29151 1.37286L2.28271 1.36548C1.93092 1.07036 1.38469 1.06804 1.03129 1.41393L1.01755 1.42738L1.00488 1.44184C0.69687 1.79355 0.695778 2.34549 1.0545 2.69659L1.05999 2.70196L1.06565 2.70717L7.28687 8.43257Z" stroke="#eab308" fill="#fff"></path>
                            </svg>
                        </div>
                        <div class="w-full">
                            <h4 class="text-lg font-bold text-white">
                                {{__("Is onlyfans safe to use?")}}
                            </h4>
                        </div>
                    </button>
                    <div x-show="openFaq4" class="faq-content pl-[62px]" style="display: none;">
                        <p class="py-3  leading-relaxed font-bold text-white"> {{__("It is a question that many people are asking themselves these days. The answer is yes and no. It depends on what you want to do on the site. If you are just looking at content or chatting with other members then it is safe to use. However, if you are planning to buy some of the videos or chat with someone privately then it is not safe to use because they can scam you easily.")}}
                        </p>
                    </div>
                </div>
                <div class="single-faq mb-8 w-full rounded-lg border border-[#F3F4FE] bg-blue-500 p-4 sm:p-8 lg:px-6 xl:px-8">
                    <button class="faq-btn flex w-full text-left" @click="openFaq5 = !openFaq5">
                        <div class="mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg bg-primary bg-opacity-5 text-primary">
                            <svg width="17" height="10" viewBox="0 0 17 10" class="icon fill-current">
                                <path d="M7.28687 8.43257L7.28679 8.43265L7.29496 8.43985C7.62576 8.73124 8.02464 8.86001 8.41472 8.86001C8.83092 8.86001 9.22376 8.69083 9.53447 8.41713L9.53454 8.41721L9.54184 8.41052L15.7631 2.70784L15.7691 2.70231L15.7749 2.69659C16.0981 2.38028 16.1985 1.80579 15.7981 1.41393C15.4803 1.1028 14.9167 1.00854 14.5249 1.38489L8.41472 7.00806L2.29995 1.38063L2.29151 1.37286L2.28271 1.36548C1.93092 1.07036 1.38469 1.06804 1.03129 1.41393L1.01755 1.42738L1.00488 1.44184C0.69687 1.79355 0.695778 2.34549 1.0545 2.69659L1.05999 2.70196L1.06565 2.70717L7.28687 8.43257Z" stroke="#eab308" fill="#fff"></path>
                            </svg>
                        </div>
                        <div class="w-full">
                            <h4 class="text-lg font-bold text-white">
                                {{__("How many onlyfans creators are there")}}
                            </h4>
                        </div>
                    </button>
                    <div x-show="openFaq5" class="faq-content pl-[62px]" style="display: none;">
                        <p class="py-3  leading-relaxed font-bold text-white"> {{__("There are currently over 1 million creators on OnlyFans. And the number is growing. OnlyFans, a social media platform for creators and fans, has over one million users. The number of users is steadily increasing as more and more people join the site.") }}
                        </p>
                    </div>
                </div>
                <div class="single-faq mb-8 w-full rounded-lg border border-[#F3F4FE] bg-blue-500 p-4 sm:p-8 lg:px-6 xl:px-8">
                    <button class="faq-btn flex w-full text-left" @click="openFaq6 = !openFaq6">
                        <div class="mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg bg-primary bg-opacity-5 text-primary">
                            <svg width="17" height="10" viewBox="0 0 17 10" class="icon fill-current">
                                <path d="M7.28687 8.43257L7.28679 8.43265L7.29496 8.43985C7.62576 8.73124 8.02464 8.86001 8.41472 8.86001C8.83092 8.86001 9.22376 8.69083 9.53447 8.41713L9.53454 8.41721L9.54184 8.41052L15.7631 2.70784L15.7691 2.70231L15.7749 2.69659C16.0981 2.38028 16.1985 1.80579 15.7981 1.41393C15.4803 1.1028 14.9167 1.00854 14.5249 1.38489L8.41472 7.00806L2.29995 1.38063L2.29151 1.37286L2.28271 1.36548C1.93092 1.07036 1.38469 1.06804 1.03129 1.41393L1.01755 1.42738L1.00488 1.44184C0.69687 1.79355 0.695778 2.34549 1.0545 2.69659L1.05999 2.70196L1.06565 2.70717L7.28687 8.43257Z" stroke="#eab308" fill="#fff"></path>
                            </svg>
                        </div>
                        <div class="w-full">
                            <h4 class="text-lg font-bold text-white">
                                {{__("What is Telegram?")}}
                            </h4>
                        </div>
                    </button>
                    <div x-show="openFaq6" class="faq-content pl-[62px]" style="display: none;">
                        <p class="py-3  leading-relaxed font-bold text-white">
                            {{__("Telegram is a messaging app that has been around for a while. It was founded in 2013 and its features have expanded to include voice calls, video calls, stickers and more. Telegram's focus on speed and security make it an excellent choice for people who want to chat on the go. Telegram groups can have up to 200 members and the app's secret chat feature allows messages to self-destruct after they are read, making it an excellent option for people who need a secure way to communicate with others.")}}
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full px-4 lg:w-1/2">
                <div class="single-faq mb-8 w-full rounded-lg border border-[#F3F4FE] bg-blue-500 p-4 sm:p-8 lg:px-6 xl:px-8">
                    <button class="faq-btn flex w-full text-left" @click="openFaq7 = !openFaq7">
                        <div class="mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg bg-primary bg-opacity-5 text-primary">
                            <svg width="17" height="10" viewBox="0 0 17 10" class="icon fill-current">
                                <path d="M7.28687 8.43257L7.28679 8.43265L7.29496 8.43985C7.62576 8.73124 8.02464 8.86001 8.41472 8.86001C8.83092 8.86001 9.22376 8.69083 9.53447 8.41713L9.53454 8.41721L9.54184 8.41052L15.7631 2.70784L15.7691 2.70231L15.7749 2.69659C16.0981 2.38028 16.1985 1.80579 15.7981 1.41393C15.4803 1.1028 14.9167 1.00854 14.5249 1.38489L8.41472 7.00806L2.29995 1.38063L2.29151 1.37286L2.28271 1.36548C1.93092 1.07036 1.38469 1.06804 1.03129 1.41393L1.01755 1.42738L1.00488 1.44184C0.69687 1.79355 0.695778 2.34549 1.0545 2.69659L1.05999 2.70196L1.06565 2.70717L7.28687 8.43257Z" stroke="#eab308" fill="#fff"></path>
                            </svg>
                        </div>
                        <div class="w-full">
                            <h4 class="text-lg font-bold text-white">
                                {{__("How to find telegram groups")}}
                            </h4>
                        </div>
                    </button>
                    <div x-show="openFaq7" class="faq-content pl-[62px]" style="display: none;">
                        <p class="py-3  leading-relaxed font-bold text-white">
                            {{__("Here at onlyham.co you can find a lot of groups and telegram channels Telegram groups are a great way to stay in touch with your followers and customers without having to manage emails or phone numbers.")}}
                        </p>
                    </div>
                </div>
            </div>
        </div>


    </div>


</section>