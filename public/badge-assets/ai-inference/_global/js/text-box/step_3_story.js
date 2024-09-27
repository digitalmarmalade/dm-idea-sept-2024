text_content = [
  {
    id: 1,
    text: `
        <p class = "animate__animated animate__fadeIn animate__slow">
          You are a Research Consultant working for FutureCity, a company that develops smart cities.
        </p>`,
  },
  {
    id: 2,
    text: `
        <p class="animate__animated animate__fadeIn animate__slow">
          FutureCity is working on a new traffic management project with the aim to decrease congestion at the city's biggest and busiest intersection.
        </p>
        `,
  },
  {
    id: 3,
    text: `
        <p class="animate__animated animate__fadeIn animate__slow">
          To start, they are interested in assessing traffic conditions and they need your help!
        </p>
        `,
  },
  {
    id: 4,
    text: `
        <p class="animate__animated animate__fadeIn animate__slow">
        Assessing the traffic conditions will allow FutureCity to find out what the root causes of the congestion may be. With this information,
        they will be able to design and propose solutions that will help improve the flow of traffic &#8212
        this will in turn reduce congestion and traffic incidents while also reducing vehicle wait time which will help with air pollution.
        </p>
        `,
  },
  {
    id: 5,
    text: `
        <p class="animate__animated animate__fadeIn animate__slow">
        FutureCity has installed street cameras all around this intersection to be able to monitor and capture traffic patterns
        and activity throughout each day. The video footage from these cameras gives FutureCity data &#8212 a lot of data.
        </p>
        `,
  },
  {
    id: 6,
    text: `
        <p class="animate__animated animate__fadeIn animate__slow">
        But how can they make use of this data to be able to draw conclusions and most importantly,
        come up with solutions for the issue of congestion?
        </p>
        `,
  },
  {
    id: 7,
    text: `
        <p class="animate__animated animate__fadeIn animate__slow">
        There are many resources and tools out there that can help us with real-life projects such as this one,
        and you will get to use some of these tools to help with your project! First, let’s learn about some of these tools.
        </p>
        `,
  },
];

var id = 0;

updateText();

function updateText() {
  console.log("first");
  $(".jsStep3 .jsStory .bubble ").contents(":not(.Js-not-remove)").remove();

  $(".jsStep3 .jsStory .bubble  .Js-not-remove").before(`${text_content[id].text}`);
}

$(".jsStep3 .jsStory .btn").click((e) => {
  id += 1;
  if (id < text_content.length) updateText();
  else {
    $(".jsStep3 .jsStory .btn").hide();
    $(".main-content").removeClass("hide");

    $("html, body").animate(
      {
        scrollTop: $(".main-content").offset().top,
      },
      800
    );
  }
});
