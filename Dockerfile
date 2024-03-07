FROM ruby

ADD . /srv/jekyll

RUN gem install bundler jekyll

RUN jekyll build

EXPOSE 4000