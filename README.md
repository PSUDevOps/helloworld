# helloworld
a hello world php app that leverages several DevOps tools as a part of a complete DevOps Toolchain.

# Goal

The goal of the project is to create a minimal application which is easy to illustrate that it is working. Additionally, we want to make it easy to make changes to the code and follow how and where the changes go through a full run of the entire toolchain.

Initially, we will just have a basic LAMP stack, however, we will add other branches that will show the full evolution of adding new parta to the toolchain. This should allow people to play along if they want to try it themselves.

# Docker Tips

Utilize shell variables to store common (but complex to type) formatting options for `docker ps -a``
One example is: 
```--format '{{.Names}}'```
which will provide only the container names. This can be useful for getting the names of the containers on which you might want to provide an action (such as removing or killing them.

Shell variables can be put into your `.bashrc` or similar shell configuration file.

More examples coming soon.
