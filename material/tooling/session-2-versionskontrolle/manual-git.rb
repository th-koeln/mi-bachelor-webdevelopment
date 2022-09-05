##########
## WRITING
##########
# The content
content = "There is no spoon!"

# The header
header = "blob #{content.length}"

# Combine header and content to object
object = [header, content].join("\0") # Null Byte

# Get SHA-1 for value
require 'digest/sha1'
sha1 = Digest::SHA1.hexdigest(object)

# Compress object
require 'zlib'
blob = Zlib::Deflate.deflate(object)

# Write data
path = Pathname.new(".git/objects/#{sha1[0...2]}/#{sha1[2..]}")
path.dirname.mkdir_p
path.write(blob)

##########
## READING
##########
# Read file
sha1 = ""
path = Pathname.new(".git/objects/#{sha1[0...2]}/#{sha1[2..]}")
blob = path.read

# And decompress
require 'zlib'
object = Zlib::Inflate.inflate(blob)

# Finally extract content
object.split("\0").last
