from wsgiref.handlers import CGIHandler
from app import app

CGIHandler().run(index)