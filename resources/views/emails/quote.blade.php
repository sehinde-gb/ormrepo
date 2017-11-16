

@component('mail::message')

![alt text](https://github.com/adam-p/markdown-here/raw/master/src/common/images/icon48.png "Logo Title Text 1")

We are pleased to inform you that we have received a quotation from a potential customer. See below:

<p>
    Customer Name: {!! $name !!}
</p>

<p>
    Customer Email Address: {!! $email !!}
</p>

<p>
    Customer Phone: {!! $phone !!}
</p>

<p>
    What is this project about ?: {!! $what_project !!}
</p>

<p>
    What is their current website address?: {!! $website !!}
</p>

<p>
    Number of web pages: {!! $pages !!}
</p>

<p>
    What is their estimated budget?: {!! $your_budget !!}
</p>

<p>
    Describe your new website?: {{ $description }}
</p>

<p>
    Describe any new functionality: {{ $functionality }}
</p>

<p>
    Are there any particular websites that you like?: {{ $website_list }}
</p>


@component('mail::panel')
This email constitutes a quotation from a potential customer. We have a service level agreement in which to
respond to the customer within 24 hours.
Please send an email to the customer with a quotation and add an expiry time for the quotation.
@endcomponent

Thanks </br> {{ config('app.name') }}
@endcomponent