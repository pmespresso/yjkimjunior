
from flup.server.fcgi import WSGIServer
from run import app as application

WSGIServer(application).run()
