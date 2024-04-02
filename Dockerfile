FROM jekyll/jekyll:latest

COPY . .

CMD ["jekyll","build"]

EXPOSE 4000